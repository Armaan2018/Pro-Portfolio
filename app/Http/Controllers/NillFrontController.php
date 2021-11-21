<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
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
use App\Models\Slider;
use App\Models\Experience;
use App\Models\Education;

class NillFrontController extends Controller
{
   public function index()
   {
   	$serve      = Service::latest()->get();
   	$work       = Work::latest()->get();
   	$cat        = Category::all();
   	$about      = Aboutme::latest()->get();
   	$skill      = Skill::latest()->get();
   	$header     = Header::all();
    $blog       = Blog::latest()->get();
    $review     = Review::latest()->get();
    $slider     = Slider::latest()->get();
    $education  = Education::latest()->get();
    $experience = Experience::latest()->get();

   	 return view('nill.dark-index',compact('serve','work','cat','about','skill','header','blog','review','slider','education','experience'));
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
