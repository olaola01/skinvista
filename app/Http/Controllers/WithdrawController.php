<?php

namespace App\Http\Controllers;

use App\Mail\Withdrawal;
use App\Models\Consultation;
use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        if ($user->withdrew_at) {
            return response()->json(['message' => 'You have already withdrawn from the study.'], 400);
        }

//        Diagnosis::where('user_id', $user->id)->delete();
//        Consultation::where('user_id', $user->id)->delete();

        // Mark user as withdrawn
        $user->withdrew_at = now();
        $user->save();

        // Send notification email to admin
        Mail::to('ol264778@dal.ca')->queue(new Withdrawal($user));

        // Revoke all user tokens
        $user->tokens()->delete();

        return response()->json(['message' => 'Successfully withdrawn from the study.']);
    }
}
