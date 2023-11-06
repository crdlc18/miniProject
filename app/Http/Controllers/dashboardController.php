<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class dashboardController extends Controller
{
    public function index(){
        $maleCount=Employee::where('gender', 'Male')->count();
        $femaleCount=Employee::where('gender', 'Female')->count();
        $totalSalary=number_format(Employee::sum('monthly_salary'),2);
        $averageAge = number_format(Employee::average('age'),2);
        return view('dashboard', compact('maleCount', 'femaleCount', 'totalSalary', 'averageAge'));
    }

   
}
