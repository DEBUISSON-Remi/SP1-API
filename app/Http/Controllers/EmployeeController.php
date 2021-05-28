<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function list($id=null)
    {
        return $id?Employee::find($id):Employee::all();
    }

    function add(Request $req)
    {
        $employee = new Employee;
        $employee->code = $req->code;
        $employee->leader_id = $req->leader_id;
        $employee->district_id = $req->district_id;
        $employee->postalCode = $req->postalCode;
        $employee->firstname = $req->firstname;
        $employee->lastname = $req->lastname;
        $employee->login = $req->login;
        $employee->password = $req->password;
        $employee->address = $req->address;
        $employee->city = $req->city;
        $employee->phone = $req->phone;
        $employee->releaseDate = $req->releaseDate;
        $employee->entryDate = $req->entryDate;
        $employee->token = $req->token;
        $employee->timespan = $req->timespan;
        $result = $employee->save();
        if ($result)
        {
            return ["Resultat" => "Les données ont été enregistrées"];
        }
        else
        {
            return ["Resultat" => "Opération refusée"];
        }
    }

    function update(Request $req, $id)
    {
        $employee=Employee::find($id);
        $employee->code = $req->code;
        $employee->postalCode = $req->postalCode;
        $employee->firstname = $req->firstname;
        $employee->lastname = $req->lastname;
        $employee->address = $req->address;
        $employee->city = $req->city;
        $employee->phone = $req->phone;
        $result = $employee->save();
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
        $employee= Employee::find($id);
        $result=$employee->delete();
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
