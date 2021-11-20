<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AdminCmsController extends Controller
{
    
    public function index()
    {
    	return view('admin.dashboard');
    }

   
}
