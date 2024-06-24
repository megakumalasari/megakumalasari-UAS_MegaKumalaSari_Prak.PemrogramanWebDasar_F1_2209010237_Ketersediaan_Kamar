<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $fillable = [
        'name_patient',
        'alamat_patient',
        'date_birth',
    ];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class, 'rooms_id');
    }
}