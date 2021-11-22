<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Sender;

class AdminCmsController extends Controller
{

     public function __construct()
    {
        $this->middleware('guest')->except(['getDashboard']);
    }
    
    public function getDashboard()
    {
        $sender = Sender::latest()->get();
    	return view('admin.sections.dashboard',compact('sender'));
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
