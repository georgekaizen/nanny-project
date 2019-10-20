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

        $id = $employee->id;

        $employee_details = new EmployeeDetail();
        $employee_details->employee_id = $id;
        $employee_details->type = $request->emp_type;
        $employee_details->price = $request->emp_price;
        $employee_details->work_experience = $request->emp_experience;
        $employee_details->availability = $request->emp_availability;
        $employee_details->save();

        return redirect()->route('employees');

    }
}
