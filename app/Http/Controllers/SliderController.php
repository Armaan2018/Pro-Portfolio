<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

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
    			<td>edit||delete</td>
    		</tr>
    		
    	<?php }
    }
}
