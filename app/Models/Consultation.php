<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['user_id', 'doctor_id', 'image_path', 'diagnosis_id', 'notes', 'image_authorized', 'sent_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }
}
