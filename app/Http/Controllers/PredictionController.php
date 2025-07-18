<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PredictionController extends Controller
{
    public function predict(Request $request)
    {
        // Validate that an image was uploaded
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No image uploaded'], 400);
        }

        $image = $request->file('image');

        // Forward the image to the Python FastAPI server
        $response = Http::attach(
            'file', file_get_contents($image->getRealPath()), $image->getClientOriginalName()
        )->post('https://c5f5d0db0763.ngrok-free.app/predict');

        // Check if the request was successful
        if ($response->successful()) {
            Log::debug($response->json());
            return $response->json();
        } else {
            Log::debug("error");
            return response()->json(['error' => 'Prediction failed'], 500);
        }
    }
}
