<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees =  Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create() {
        return view('employees.create');

    }
    public function store(Request $request) {
        $data = $request->validate([
            'nic' => 'required',
            'empl_name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'joined_date' => 'required'
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee) {
        return view('employees.edit', ['employee'=> $employee]);
    }

    public function update(Employee $employee, Request $request) {
        $data = $request->validate([
            'nic' => 'required',
            'empl_name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'joined_date' => 'required'
        ]);

        $employee->update($data);

        return redirect(route('employee.index'));
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect(route('employee.index'));
    }
}
