<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class, 'practitioners_id');
    }

    public function visitsReports()
    {
        return $this->hasMany(VisitReports::class, 'visits_id');
    }

    public function visitState()
    {
        return $this->belongsTo(VisitState::class, 'visitStates_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employees_id');
    }
}
