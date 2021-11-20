<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Category;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function workSectionShow()
    {
    	$category = Category::latest()->get();
    	return view('admin.sections.work',compact('category'));
    }


    //category store
public function categoryAdd(Request $request){

       $request -> validate([

       	    'category_name' => 'required|unique:categories',

       ]);


       Category::create([

       	'category_name'       => $request -> category_name,
       	'category_slug'       => Str::slug($request -> category_name),
       


       ]);




       return response()->json(['success','successfully done']);

    	

    }

    //work store

    public function workAdd(Request $request){

       $request -> validate([

       	    'title' => 'required|unique:works',
       	    'work_link' => 'required',

    ]);


        $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }


     $workdata =  Work::create([

       	'title'       => $request -> title,
       	'work_link'        => $request -> work_link,
       	'image' => $unique_file_name,
       	


       ]);


     $workdata -> categories() -> attach($request -> category);




       return response()->json(['success','successfully done']);

    	

    }


    //work show

    public function workShow()
    {
    	$data = Work::latest()->get();

         $i = 1;
    	foreach ($data as $element) { ?>
    		<tr>
                                                <th><?php echo $i; $i++; ?></th>
                                                <td><?php echo $element -> title; ?></td>                               
                                                <td><img width="60px;" src="public/media/work/<?php echo $element -> image ?>"></td>

                                                <td><?php foreach ($element -> categories as $cat) {
                                                	   echo $cat -> category_name;
                                                } ?></td>
                                                <td><a class="text-info" href="<?php echo $element -> work_link; ?>"><?php echo $element -> work_link; ?></a></td>
                                                
                                                <td>Active</td>
                                                <td class="color-primary">Edit || Delete</td>
                                            </tr>
                                            
    	<?php }

    }


     public function categoryShow()
    {
    	$data = Category::latest()->get();

         $i = 1;
    	foreach ($data as $element) { ?>
    		<tr>
                                                <th><?php echo $i; $i++; ?></th>
                                                <td><?php echo $element -> category_name; ?></td>                               
                                                <td><?php echo $element -> category_slug; ?></td>                               
                      

                                               
                                              
                                                
                                                <td>Active</td>
                                                <td class="color-primary">Edit || Delete</td>
                                            </tr>
                                            
    	<?php }

    }
}
