<?php

namespace App\Http\Controllers;

use App\Models\GameScore;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class GameScoreController extends Controller
{
    /**
     * Save a game score for the authenticated user.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function saveScore(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'score' => ['required', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        $data = $validator->validated();

        GameScore::create([
            'user_id' => Auth::id(),
            'score' => $data['score'],
        ]);

        return response()->json(['message' => 'Score saved successfully']);
    }

    /**
     * Fetch the leaderboard (recent scores with user emails).
     *
     * @return JsonResponse
     */
    public function getLeaderboard(): JsonResponse
    {
        $scores = GameScore::with('user')
            ->orderBy('score', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(50) // Limit to top 50 scores
            ->get()
            ->map(function ($score) {
                return [
                    'score' => $score->score,
                    'user_email' => $score->user->email,
                    'created_at' => $score->created_at,
                ];
            });

        return response()->json(['data' => $scores]);
    }
}
