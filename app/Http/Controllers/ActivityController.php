<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    function list($id=null)
    {
        return $id?Activity::find($id):Activity::all();
    }

    function add(Request $req)
    {
        $activity = new Activity;
        $activity->employees_id = $req->employees_id;
        $activity->theme = $req->theme;
        $activity->request = $req->request;
        $activity->place = $req->place;
        $activity->code = $req->code;
        $activity->creationDate = $req->creationDate;
        $activity->validationDate = $req->validationDate;
        $activity->validationDate = $req->validationDate;
        $activity->allocatedBudget = $req->allocatedBudget;
        $activity->unit = $req->unit;
        $activity->activityStates_id = $req->activityStates_id;
        $result = $activity->save();
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
        $activity= Activity::find($req->id);
        $activity->employees_id = $req->employees_id;
        $activity->theme = $req->theme;
        $activity->request = $req->request;
        $activity->place = $req->place;
        $activity->code = $req->code;
        $activity->creationDate = $req->creationDate;
        $activity->validationDate = $req->validationDate;
        $activity->validationDate = $req->validationDate;
        $activity->allocatedBudget = $req->allocatedBudget;
        $activity->unit = $req->unit;
        $activity->activityStates_id = $req->activityStates_id;
        $result=$activity->save();
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
        $activity = Activity::find($id);
        $result=$activity->delete();
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
