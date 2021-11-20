<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutme;
use App\Models\Skill;
use Illuminate\Support\Facades\Validator;

class AboutMeController extends Controller
{
    public function aboutMe()
    {
    	$latest = Aboutme::latest()->get();
    	return view('admin.sections.aboutme',compact('latest'));
    } 

    public function skillShow()
    {
       
        return view('admin.sections.skill');
    }

     public function skillCreate(Request $request)
    {

        $request -> validate([


            'skillparcentage' => 'required|integer|between:1,100',
            'orderno' => 'required|integer|between:1,6',
            'skillname' => 'required|unique:skills',



        ]);
       
       Skill::create([

        'skillname'       => $request -> skillname,
        'skillparcentage' => $request -> skillparcentage,
        'orderno'           => $request -> orderno,



       ]);


       return response()->json(['success','successfully done']);


        
    }



    public function skillShowAll()
    {
       $skilld = Skill::latest()->get();
       $i = 1;
       foreach ($skilld as $key ) { ?>
        <tr>
             <th><?php echo $i; $i++; ?></th>
          <td><?php echo $key -> skillname ?> </td>
          <td><?php echo $key -> skillparcentage ?> </td>
          <td><?php echo $key -> orderno ?> </td>s
          <td>Active</td>
          <td>edit || delete</td>
        </tr>
         
      <?php }
    }


    public function hideCard()
    {
    	$damn = Aboutme::latest()->count();

    	return $damn;




    } 


     public function hideCardHeader()
    {
        $damn = Aboutme::latest()->count();

        return $damn;




    }


    public function aboutEdit($id)
    {
    	$damn = Aboutme::findOrFail($id);

    	return [

    		'name'                => $damn -> name,
    		'description'         => $damn -> description,
    		'location'            => $damn -> location,
    		'phone'               => $damn -> phone,
    		'age'                 => $damn -> age,
    		'email'               => $damn -> email,
    		'image'               => $damn -> image,
    		'id'                  => $damn -> id





    	];




    }



   



   


  



    public function aboutMeCreate(Request $request)
    {

    	   $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }



    	Aboutme::create([


    		'name'                => $request -> name,
    		'description'         => $request -> description,
    		'location'            => $request -> location,
    		'phone'               => $request -> phone,
    		'age'                 => $request -> age,
    		'email'               => $request -> email,
    		'image'               => $unique_file_name,






    	]);
    	
    }







     public function aboutUpdate(Request $request)
    {


       $unique_file_name = $request -> oldimage;


         
    	 if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }else{

             unset($img);
        }



    	$editid = $request -> editid;

    	$data = Aboutme::findOrFail($editid);

    	$data -> name = $request -> name;
    	$data -> description = $request -> description;
    	$data -> location = $request -> location;
    	$data -> phone = $request -> phone;
    	$data -> email = $request -> email;
    	$data -> image = $unique_file_name;
    	$data -> update();
    }
}
