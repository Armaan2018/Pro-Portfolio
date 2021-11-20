<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
      public function index()
    {
    	$social = Social::all();
    	return view('admin.sections.social',compact('social'));
    }


     public function socialCreate(Request $request)
    {

         $social = [


        'facebook' => $request -> facebook,
        'twitter' => $request -> twitter,
        'instagram' => $request -> instagram,
        'dribble' => $request -> dribble,
        'github' => $request -> github,
        'linkdin' => $request -> linkdin,





         ];
        



    	Social::create([
    		'logo'                 => $request -> logo,
    		'social'               => json_encode($social),
    	]);

    	return response()->json(['success','successfully done']);
    }


     public function hideCardSocial()
    {
        $damn = Social::latest()->count();

        return $damn;




    }


    public function socialEdit($id)
    {
        $headfind = Social::findOrFail($id);

        $get_item = $headfind -> social;


        $decoded = json_decode($get_item);


        $facebook   = $decoded -> facebook;
        $twitter    = $decoded -> twitter;
        $instagram  = $decoded -> instagram;
        $github     = $decoded -> github;
        $dribble    = $decoded -> dribble;
        $linkdin    = $decoded -> linkdin;


        return [

            'logo'      => $headfind -> logo,
            'id'        => $headfind -> id,
            'facebook'  => $facebook,
            'twitter'   => $twitter,
            'instagram' => $instagram,
            'github'    => $github,
            'dribble'   => $dribble,
            'linkdin'   => $linkdin,
  
        ];


    }






      public function socialUpdate(Request $request)
    {

        $getidsocial = $request -> getidsocial;

        $data = Social::findOrFail($getidsocial);


          $editsocial = [


        'facebook'  => $request -> facebook,
        'twitter'   => $request -> twitter,
        'instagram' => $request -> instagram,
        'github'    => $request -> github,
        'dribble'   => $request -> dribble,
        'linkdin'   => $request -> linkdin,


         ];




        $data -> logo = $request -> logo;
        $data -> social = json_encode($editsocial);
        $data -> update();
    }
}
