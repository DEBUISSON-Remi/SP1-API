<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationsEmployeesPrivilege extends Model
{
    use HasFactory;

    public function privilege()
    {
        return $this->belongsTo(Privilege::class, 'privileges_id');
    }
}
