<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = ['condition', 'confidence','image_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
