<?php

namespace App\Http\Controllers\Admin;
use App\Models\CompaniesModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $companies =  CompaniesModel::all();
        return view('admin.companyDashboard.index',compact('companies'));
    }
}
