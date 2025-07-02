<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'name' => 'Dr Omololu Enigbokan',
            'specialty' => 'Physician and Dermatologist',
            'email' => 'omololu@example.com',
        ]);
        Doctor::create([
            'name' => 'Dr Rotimi Aderibigbe',
            'specialty' => 'Consultant Plastic, Reconstructive and Aesthetic surgeon',
            'email' => 'rotimi@example.com',
        ]);
    }
}
