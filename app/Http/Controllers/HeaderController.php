<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    public function headerPart()
    {
    	$head = Header::all();
    	return view('admin.sections.header',compact('head'));
    }


     public function headerCreate(Request $request)
    {

    	   $unique_file_name = '';

        if ($request -> hasFile('cover_image')) {

            $img = $request -> file('cover_image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }



         $animatedtext = [


        'item1' => $request -> animrole1,
        'item2' => $request -> animrole2,
        'item3' => $request -> animrole3,
        'item4' => $request -> animrole4,
        'item5' => $request -> animrole5,





         ];
        



    	Header::create([


    		'title'                 => $request -> title,
    		'cover_image'           => $unique_file_name,
    		'animatedtext'          => json_encode($animatedtext),
    		






    	]);
    	return response()->json(['success','successfully done']);
    }


   public function hideCardHeader()
    {
        $damn = Header::latest()->count();

        return $damn;




    }


     public function headerEdit($id)
    {
        $headfind = Header::findOrFail($id);

        $get_item = $headfind -> animatedtext;


        $decoded = json_decode($get_item);


        $test1 = $decoded -> item1;
        $test2 = $decoded -> item2;
        $test3 = $decoded -> item3;
        $test4 = $decoded -> item4;
        $test5 = $decoded -> item5;


        return [

        	'title' => $headfind -> title,
        	'cover_image' => $headfind -> cover_image,
        	'id' => $headfind -> id,
        	'animrole1' => $test1,
        	'animrole2' => $test2,
        	'animrole3' => $test3,
        	'animrole4' => $test4,
        	'animrole5' => $test5,
        	






        ];


        




    }


     public function headerUpdate(Request $request)
    {


       $unique_file_name = $request -> oldcover;


         
    	 if ($request -> hasFile('cover_image')) {

            $img = $request -> file('cover_image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }else{

             unset($img);
        }



    	$headeditid = $request -> headeditid;

    	$data = Header::findOrFail($headeditid);


    	  $editanimtext = [


        'item1' => $request -> animrole1,
        'item2' => $request -> animrole2,
        'item3' => $request -> animrole3,
        'item4' => $request -> animrole4,
        'item5' => $request -> animrole5,





         ];




    	$data -> title = $request -> title;
    	$data -> animatedtext = json_encode($editanimtext);
    	$data -> cover_image = $unique_file_name;
    	$data -> update();
    }
}
