<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_patient extends Model
{
    protected $fillable = [
        'rooms_id',
        'patient_id',
        'check_in',
        'check_out',
    ];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class, 'rooms_id');
    }

    public function patients()
    {
        return $this->belongsTo(Patients::class, 'patients_id');
    }
}
   