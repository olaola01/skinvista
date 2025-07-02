<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class TokenCreateController extends Controller
{
    /**
     * Gets a token
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function getToken(Request $request): JsonResponse
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users,email'],
            'scopes' => ['sometimes', 'array']
        ]);

        $data = $validator->validated();

        $user = User::where('email', $data['email'])->with('tokens')
            ->whereNull('withdrew_at')
            ->firstOrFail();
        $scopes = $data['scopes'] ?? [];

        if (!$user) {
            return response()->json(['data' => null, 'message' => 'User not found'], 404);
        }

        $data = ['token' => $user->createToken($user->email, $scopes)->plainTextToken];

        return response()->json(['data' => new JsonResource($data)]);
    }
}
