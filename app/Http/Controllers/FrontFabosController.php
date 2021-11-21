<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Work;
use App\Models\Category;
use App\Models\Aboutme;
use App\Models\Skill;
use App\Models\Header;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Sender;

class FrontFabosController extends Controller
{
   public function index()
   {
   	$serve   = Service::latest()->get();
   	$work    = Work::latest()->get();
   	$cat     = Category::latest()->get();
   	$about   = Aboutme::latest()->get();
   	$skill   = Skill::latest()->get();
   	$header  = Header::latest()->get();
      $blog    = Blog::latest()->get();
      $review  = Review::latest()->get();

   	 return view('fabosfront.index',compact('serve','work','cat','about','skill','header','blog','review'));
   }

   public function senderMsg(Request $request)
   {
      Sender::create([


         'name' => $request -> name,
         'email' => $request -> email,
         'msg' => $request -> msg,

      ]); 


     return response()->json(['success','successfully done']);
   }
}
