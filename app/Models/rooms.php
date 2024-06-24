<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $fillable = [
        'level',
        'nomor_room',
        'kapasitas',
        'tersedia',
    ];

    public function patients()
    {
        return $this->hasMany(Patients::class, 'room_id');
    }
}