<?php

namespace App\Http\Controllers;


use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('manageEmployee.index', ['employees'=> $employees]);
        
    }

    public function add(){
        return view('manageEmployee.add');
    }

    public function store(EmployeeRequest $request){
        
        $data = $request->validated();
        $newEmployee = Employee:: create($data);
        return redirect(route('manageEmp.index'))->with('success', 'Employee has been added.');;
    }
    public function edit(Employee $employee){
        return view('manageEmployee.edit' , ['employee' =>$employee]);
    }

    public function update(Employee $employee, EmployeeRequest $request){
        $data = $request->validated();
        $employee->update($data);
        return redirect(route('manageEmp.index'))->with('success', 'Information updated successfully.');
    }
    public function delete(Employee $employee){
        $employee->delete();
        return redirect(route('manageEmp.index'))->with('success', 'Employee deleted successfully.');
    }

    

}
