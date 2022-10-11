<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request){
        $employee = new Employee();
        $employee->names = $request->names;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->message = $request->message;

        $employee->save();

        return back()->with('success','Message sent!');
    }
}
