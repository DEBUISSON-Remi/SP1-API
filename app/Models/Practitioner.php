<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function visits()
    {
        return $this->hasMany(Visit::class,'practitioners_id');
    }
}
