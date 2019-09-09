<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();

       return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
                   'first_name'=>'required',
                   'last_name'=>'required',
                   'middle_name'=>'required',
                   'email' => 'email'
               ]);


      $employee = new Employee();
      $employee->first_name = $request->first_name;
      $employee->last_name = $request->last_name;
      $employee->middle_name = $request->middle_name;
      $employee->phone = $request->phone;
      $employee->email = $request->email;
      $employee->job_title = $request->job_title;
      $employee->city = $request->city;
      $employee->country = $request->country;
       $request->session()->flash('message', 'Successfully Added');
      $employee->save();
      return redirect('employees/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('employees.edit',compact('employee',$employee));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $request->validate([
                   'first_name'=>'required',
                   'last_name'=>'required',
                   'middle_name'=>'required',
                   'email' => 'email'
               ]);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->middle_name = $request->middle_name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->job_title = $request->job_title;
        $employee->city = $request->city;
        $employee->country = $request->country;
        $employee->save();
         return redirect('/employees')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //

     $employee->delete();
     return redirect('/employees')->with('success', 'Contact deleted!');
    }
}
