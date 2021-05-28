<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitReports;

class VisitReportsController extends Controller
{
    function list($id=null)
    {
        return $id?VisitReports::find($id):VisitReports::all();
    }

    function add(Request $req)
    {
        $visitReports = new VisitReports;
        $visitReports->visits_id = $req->visits_id;
        $visitReports->creationDate = $req->creationDate;
        $visitReports->comment = $req->comment;
        $visitReports->starScore = $req->starScore;
        $visitReports->visitReportStates_id = $req->visitReportStates_id;
        $result = $visitReports->save();
        if ($result)
        {
            return ["Resultat" => "Les données ont été enregistrées"];
        }
        else
        {
            return ["Resultat" => "Opération refusée"];
        }
    }

    function update(Request $req)
    {
        $visitReports= VisitReports::find($req->id);
        $visitReports->visits_id = $req->visits_id;
        $visitReports->creationDate = $req->creationDate;
        $visitReports->comment = $req->comment;
        $visitReports->starScore = $req->starScore;
        $visitReports->visitReportStates_id = $req->visitReportStates_id;
        $result=$visitReports->save();
        if($result)
        {
            return ["Resultat"=>"Données modifiées"];
        }
        else
        {
            return ["Resultat"=>"Modification échouée"];
        }

    }

    function delete($id)
    {
        $visitReports = VisitReports::find($id);
        $result=$visitReports->delete();
        if($result)
        {
            return ["Resultat"=>"Données supprimées"];
        }
        else
        {
            return ["Resultat"=>"suppression echouée"];
        }

    }
}
