<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Support\Facades\File;


class SliderController extends Controller
{
       public function index()
    {
    	return view('admin.sections.slider');
    }

    public function sliderCreate(Request $request)
    {


    	$request -> validate([

       	    
       	    'sliderimage' => 'required',

       ]);


    	 $unique_file_name = '';

        if ($request -> hasFile('sliderimage')) {

            $img = $request -> file('sliderimage');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }






    	Slider::create([

    		'title'   => $request -> title, 
    		'sliderimage' => $unique_file_name, 
    		'sliderlink'   => $request -> sliderlink





    	]);
    }


    public function sliderDelete($id)
    {
       $del_slider = Slider::findOrFail($id);
       $del_slider -> delete();

        File::delete('public/media/work/'.$del_slider-> sliderimage);
    }



    public function sliderShow()
    {
    	$bloget = Slider::latest()->get();

    	$i = 1;

    	foreach ($bloget as $element) { ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> title; ?></td>
    			<td><img width="60px;" src="public/media/work/<?php echo $element -> sliderimage ?>"></td>
    			<td><?php echo $element -> sliderlink; ?></td>
    			<td>Active</td>
    			 <td class="color-primary"><div class="d-flex">
                                                        <a href="#" data-toggle="modal" data-target="#slider_edit_modal" id="slider_btn_id" slider_btn_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                                                            
                                                        </i></a>
                                                        <a href="" id="del_slider_id" del_slider_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div></td>
    		</tr>
    		
    	<?php }
    }

    public function sliderEdit($id){
        $slider_edit = Slider::findOrFail($id);

        return [

            'title'         => $slider_edit -> title,
            'sliderlink'    => $slider_edit -> sliderlink,
            'sliderimage'   => $slider_edit -> sliderimage,
            'get_slider_id' => $slider_edit -> id,
            'old_slider'    => $slider_edit -> sliderimage,



        ];

    }

        protected function deleteOldImage()
    {
      if ($request -> sliderimag){
        Storage::delete('/public/media/work/'.$request-> image);
      }
     }


    public function sliderUpdate(Request $request)
    {
        
        $check = $request -> get_slider_id;

        $check_slider = Slider::findOrFail($check);

       

         $unique_file_name = $request -> old_slider;

        if ($request -> hasFile('sliderimage')) {

            $img = $request -> file('sliderimage');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);

             File::delete('public/media/work/'.$request-> old_slider);
        }


         $check_slider -> title = $request -> title;
         $check_slider -> sliderlink = $request -> sliderlink;
         $check_slider -> sliderimage = $unique_file_name;

         $check_slider -> update();
    }
}
