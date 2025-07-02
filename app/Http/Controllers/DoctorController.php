<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::select('id', 'name', 'specialty')->get();
        return response()->json(['data' => $doctors]);
    }
}
