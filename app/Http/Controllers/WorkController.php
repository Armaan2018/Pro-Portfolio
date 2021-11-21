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


     public function workEdit($id)
    {
      $workedit = Work::findOrFail($id);

      
      foreach ($workedit -> categories as $keyss) {
        $nav = $keyss -> category_name;
        $nav_id = $keyss -> id;
      }

     




     

      return [

        'title'                           => $workedit -> title,
        'work_link'                       => $workedit -> work_link,
        'image'                           => $workedit -> image,
        'category'                        => $nav,
        'work_id'                         => $workedit -> id,
        'cat_id'                          => $nav_id,
        


      ];

      return response() -> json(['success','data edited']);
      
    }


     public function workUpdate(Request $request)
    {

      $get_id_work = $request -> work_id;


      $work_update = Work::findOrFail($get_id_work);

 $unique_file_name = $request -> old_work_image;


         
       if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }else{

             unset($img);
        }




      $work_update -> title = $request -> title;

      $work_update -> work_link = $request -> work_link;

      $work_update -> image = $unique_file_name;

      $work_update -> update();

     

      
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
                                                 <td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#editworkmodal" id="work_edit_btn" work_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_work_id" del_work_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
                                            </tr>
                                            
    	<?php }

    }




    public function categoryEdit($id)
    {
      $editid = Category::findOrFail($id);

      return [

        'category_name'                   => $editid -> category_name,
        'category_id'                     => $editid -> id



      ];

      return response() -> json(['success','data edited']);
      
    }


    public function categoryUpdate(Request $request)
    {

      $get_id = $request -> category_id;


      $update_cat = Category::findOrFail($get_id);

      $update_cat -> category_name = $request -> category_name;

      $update_cat -> category_slug = Str::slug($request -> category_name);

      $update_cat -> update();




      
    }



    public function categoryDelete($id)
    {
      $delid = Category::findOrFail($id);
      $delid -> delete();
    } 

    public function workDelete($id)
    {
      $delid = Work::findOrFail($id);
      $delid -> delete();
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
                                                <td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#editcatmodal" id="cat_edit_btn" cat_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_cat_id" del_cat_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
                                            </tr>
                                            
    	<?php }

    }
}
