<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function addEmployee(Request $req){
        $emp = new Employee();
        $emp->name = $req->name;
        $emp->email = $req->email;
        $emp->message = $req->message;

        $emp->save();

        return redirect("/getemployees");
    }

    public function getEmployees(){
        $emp = new Employee();

        $data = $emp::all();

        return view("getEmployees", compact("data"));
    }

    public function editEmployee($id){
        $emp = new Employee();
        $data = $emp::find($id);

        return view("editemployee", compact("data"));
    }

    public function editingEmployee(Request $req, $id){
        $emp = Employee::find($id);

        $emp->name = $req->name;
        $emp->email = $req->email;
        $emp->message = $req->message;

        $emp->save();

        return redirect("/getemployees");
    }

    public function deleteEmployee($id){
        $emp = Employee::find($id);

        $emp->delete();

         return redirect("/getemployees");
    }


}
