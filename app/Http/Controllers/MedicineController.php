<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    function list($id=null)
    {
        return $id?Medicine::find($id):Medicine::all();
    }

    function add(Request $req)
    {
        $medicine = new Medicine;
        $medicine->code = $req->code;
        $medicine->commercialName = $req->commercialName;
        $medicine->family_id = $req->family_id;
        $medicine->composition = $req->composition;
        $medicine->effects = $req->effects;
        $medicine->contraindication = $req->contraindication;
        $result = $medicine->save();
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
        $medicine= Medicine::find($req->id);
        $medicine->code = $req->code;
        $medicine->commercialName = $req->commercialName;
        $medicine->family_id = $req->family_id;
        $medicine->composition = $req->composition;
        $medicine->effects = $req->effects;
        $medicine->contraindication = $req->contraindication;
        $result=$medicine->save();
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
        $medicine = Medicine::find($id);
        $result=$medicine->delete();
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
