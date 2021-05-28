<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitReports extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function visit()
    {
        return $this->belongsTo(Visit::class,'visits_id');
    }

    public function visitReportState()
    {
        return $this->belongsTo(VisitReportState::class, 'visitReportStates_id');
    }
}
