<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addemployee', function () {
    return view("addemployee");
});

Route::get('/getemployees', [EmployeeController::class, "getEmployees"]);


Route::post('/addemployee', [EmployeeController::class, "addEmployee"]);

Route::get('/editemployee/{id}', [EmployeeController::class, "editEmployee"]);
Route::post('/editingemployee/{id}', [EmployeeController::class, "editingEmployee"]);