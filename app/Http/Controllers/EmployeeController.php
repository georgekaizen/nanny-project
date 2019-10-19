<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees')->with('employees', $employees);
    }

    public function registration()
    {
        return view('dashboard.employee_registration');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->names = $request->emp_names;
        $employee->phonenumber = $request->emp_phone;
        $employee->location = $request->emp_location;
        $employee->national_id = $request->emp_id_no;
        $employee->description = $request->emp_description;
        $employee->save();

        $employee->id = $id;

        $employee_details = new EmployeeDetail();
        $employee_details =


        $employees = Employee::all();

        return view('employees')->with('employees', $employees);

    }
}
