<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompaniesModel;
use App\Models\EmployeesModel;
use DB;

class Companies extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =  CompaniesModel::all();
        return view('admin.companies.index',compact('companies'));
        // dd ($companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $company = new CompaniesModel;
        $company->name = $request->input('companyname');
        $company->email = $request->input('companyemail');
        $company->logo = $request->input('companylogo');
        $company->website = $request->input('companywebsite');
        $company->save();

        // return $company;

        return redirect(route('admin.dashboard'))->with('status','Company Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $companies =  CompaniesModel::find($id);
        $companies = CompaniesModel::where('id', $id)->first();
        // return view('admin.companies.index',compact('companies'));
        // dd($companies);

        $employeeList = CompaniesModel::with('getEmployee')->get();
        $companyList = EmployeesModel::with('getCompany')->get();
        return view('admin.companies.index',compact('employeeList','companyList','companies'));
        // dd($employeeList);
        return $employeeList;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies =  CompaniesModel::where('id', $id)->first();
        return view('admin.companies.edit',compact('companies'));
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
        $companies =  CompaniesModel::find($id);

        $companies->name = $request->input('companyname');
        $companies->email = $request->input('companyemail');
        $companies->logo = $request->input('companylogo');
        $companies->website = $request->input('companywebsite');
        $companies->update();

        // return $companies;

        return redirect(route('admin.dashboard'))->with('status','Company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $companies =  CompaniesModel::find($id);
        $companies->delete();
        return redirect(route('admin.dashboard'))->with('status','Company Deleted Successfully');
    }
}
