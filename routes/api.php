<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\VisitReportsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PractitionerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [\App\Http\Controllers\AuthController::class , 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class , 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class , 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class , 'me']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("visits",[VisitController::class,'index']);
Route::get("visit/{id}",[VisitController::class,'show']);
Route::post("visit/add",[VisitController::class,'add']);
Route::put("visit/update",[VisitController::class,'update']);
Route::delete("visit/delete/{id}",[VisitController::class,'delete']);

Route::get("visitReports/{id?}",[VisitReportsController::class,'list']);
Route::post("visitReports/add",[VisitReportsController::class,'add']);
Route::put("visitReports/update",[VisitReportsController::class,'update']);
Route::delete("visitReports/delete/{id}",[VisitReportsController::class,'delete']);

Route::get("activity/{id?}",[ActivityController::class,'list']);
Route::post("activity/add",[ActivityController::class,'add']);
Route::put("activity/update",[ActivityController::class,'update']);
Route::delete("activity/delete/{id}",[ActivityController::class,'delete']);

Route::get("practitioner/{id?}",[PractitionerController::class,'list']);
Route::post("practitioner/add",[PractitionerController::class,'add']);
Route::put("practitioner/update",[PractitionerController::class,'update']);
Route::delete("practitioner/delete/{id}",[PractitionerController::class,'delete']);

Route::get("medicine/{id?}",[MedicineController::class,'list']);
Route::post("medicine/add",[MedicineController::class,'add']);
Route::put("medicine/update",[MedicineController::class,'update']);
Route::delete("medicine/delete/{id}",[MedicineController::class,'delete']);

Route::get("employee/{id?}",[EmployeeController::class,'list']);
Route::post("employee/add",[EmployeeController::class,'add']);
Route::put("employee/{id}",[EmployeeController::class,'update']);
Route::delete("employee/delete/{id}",[EmployeeController::class,'delete']);

