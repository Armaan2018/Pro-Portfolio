<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AdminCmsController extends Controller
{

     public function __construct()
    {
        $this->middleware('guest')->except(['getDashboard']);
    }
    
    public function getDashboard()
    {
    	return view('admin.layouts.dashboard');
    }


    public function adminLogin()
    {
    	return view('admin.page-login');
    }

    public function adminRegister()
    {
    	return view('admin.page-register');
    }

   
}
