<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeesModel;
use App\Models\CompaniesModel;
use DB;

class Employees extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =  EmployeesModel::all();
        return view('admin.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new EmployeesModel;
        $employees->firstname = $request->input('firstname');
        $employees->lastname = $request->input('lastname');
        $employees->company = $request->input('company');
        $employees->email = $request->input('email');
        $employees->phone = $request->input('phone');
        $employees->save();

        // return $employees;

        return redirect(route('employees.index'))->with('status','Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = EmployeesModel::where('id', $id)->first();
        return view('admin.employees.details',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees =  EmployeesModel::where('id', $id)->first();
        return view('admin.employees.edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employees =  EmployeesModel::find($id);

        $employees->firstname = $request->input('firstname');
        $employees->lastname = $request->input('lastname');
        $employees->company = $request->input('company');
        $employees->email = $request->input('email');
        $employees->phone = $request->input('phone');
        $employees->update();

        // return $employees;

        return redirect(route('employees.index'))->with('status','Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees =  EmployeesModel::find($id);
        $employees->delete();
        return redirect(route('employees.index'))->with('status','Employee Deleted Successfully');
    }
}
