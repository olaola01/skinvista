<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class DiagnosisController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function saveDiagnosis(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'condition' => ['required'],
            'confidence' => ['required'],
            'image_path' => ['nullable', 'string'],
        ]);

        $data = $validator->validated();

        Diagnosis::create([
            'condition' => $data['condition'],
            'confidence' => $data['confidence'],
            'user_id' => \auth()->user()->id,
            'image_path' => $data['image_path'] ?? null,
        ]);

        return response()->json(['message' => 'Diagnosis saved successfully']);
    }

    /**
     * Fetch the authenticated user's diagnoses.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getDiagnoses(Request $request): JsonResponse
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $diagnoses = Diagnosis::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        Log::debug($diagnoses);

        return response()->json(['data' => $diagnoses]);
    }

    /**
     * Delete a diagnosis by its ID.
     *
     * @param Request $request
     * @param string $id
     * @return JsonResponse
     */
    public function deleteDiagnosis(Request $request, string $id): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $diagnosis = Diagnosis::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$diagnosis) {
            return response()->json(['message' => 'Diagnosis not found or you do not have permission to delete it'], 404);
        }

        $diagnosis->delete();

        return response()->json(['message' => 'Diagnosis deleted successfully']);
    }
}
