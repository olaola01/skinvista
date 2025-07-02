<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationRequest;
use App\Models\Consultation;
use App\Models\Diagnosis;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ConsultationController extends Controller
{
    public function index(Request $request)
    {
        $consultations = Consultation::with(['doctor', 'diagnosis'])
            ->where('user_id', auth()->id())
            ->get();

        return response()->json([
            'data' => $consultations->map(function ($consultation) {
                Log::debug(Storage::disk('public')->url($consultation->image_path));
                return [
                    'id' => $consultation->id,
                    'user_id' => $consultation->user_id,
                    'doctor_id' => $consultation->doctor_id,
                    'diagnosis_id' => $consultation->diagnosis_id,
                    'notes' => $consultation->notes,
                    'image_authorized' => (bool) $consultation->image_authorized,
                    'image_path' => $consultation->image_path ? Storage::disk('public')->url($consultation->image_path) : null,
                    'sent_at' => $consultation->sent_at,
                    'doctor' => [
                        'name' => $consultation->doctor->name,
                        'specialty' => $consultation->doctor->specialty,
                    ],
                    'diagnosis' => [
                        'condition' => $consultation->diagnosis->condition,
                        'confidence' => $consultation->diagnosis->confidence,
                    ],
                ];
            }),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'diagnosis_id' => 'required|exists:diagnoses,id',
            'notes' => 'nullable|string',
            'image' => 'required_if:image_authorized,true|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $diagnosis = Diagnosis::findOrFail($request->diagnosis_id);
        if ($diagnosis->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $imagePath = null;
        if ($request->image_authorized && $request->hasFile('image')) {
            $imagePath = $request->file('image')->store('consultations', 'public');
        }

        $consultation = Consultation::create([
            'user_id' => auth()->id(),
            'doctor_id' => $request->doctor_id,
            'diagnosis_id' => $request->diagnosis_id,
            'notes' => $request->notes,
            'image_authorized' => (bool) $request->image_authorized,
            'image_path' => $imagePath,
            'sent_at' => now(),
        ]);

        // Send email to doctor
        $doctor = Doctor::findOrFail($request->doctor_id);
        Mail::to($doctor->email)->send(new ConsultationRequest($consultation));

        return response()->json(['message' => 'Consultation request sent successfully']);
    }
}
