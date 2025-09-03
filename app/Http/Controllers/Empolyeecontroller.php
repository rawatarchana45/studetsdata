<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Empolyeecontroller extends Controller
{

    public function index()
    {
        $empolyees = Employee::get();
        return view('employee.index', compact('empolyees'));
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {

        // return $request;
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'joining_date' => 'required',
            'address' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'address' => $request->address,
            'joining_date' => $request->joining_date,

        ];

        $created = Employee::create($data);

        if ($created) {
            return redirect()->route('employee.create')->with('failure', 'something went wrong');

            return redirect()->route('employee.index')->with('success', 'employee added ');
        }

        // return [$name,$age,$email,$phone,$designation,$salary,$joining_date,$address];
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return "Data Not found!";
        }

        return view('employee.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return "Data Not found!";
        }

        // return $request;
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'designation' => 'required',

            'address' => 'required',
        ]);


        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'address' => $request->address,
            'joining_date' => $request->joining_date,

        ];

        $updated = $employee->update($data);

        if ($updated) {
            return redirect()->route('employee.index')->with('success', 'employee Updated ');
        }
    }
    public function show() {}
    public function destroy(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return "Data Not found!";
        }
        $deleted = $employee->delete();
        if ($deleted) {
            return redirect()->route('employee.index')->with('success', 'employee Deleted ');
        }
        return redirect()->route('employee.index')->with('failure', 'Unable to delete');
    }
}
