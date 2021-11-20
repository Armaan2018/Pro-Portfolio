<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index()
    {
    	return view('admin.sections.review');
    }

    public function reviewCreate(Request $request)
    {


    	// $request -> validate([

     //   	    'name' => 'required|unique:reviews',
     //   	    'role' => 'required',
     //   	    'content' => 'required',

     //   ]);


    	 $unique_file_name = '';

        if ($request -> hasFile('reviewer_image')) {

            $img = $request -> file('reviewer_image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }






    	Review::create([

    		'name'             => $request -> name, 
    		'review'           => $request -> review, 
    		'role'             => $request -> role, 
    		'reviewer_image'   => $unique_file_name





    	]);
    }


    public function reviewShow()
    {
    	$bloget = Review::latest()->get();

    	$i = 1;

    	foreach ($bloget as $element) { ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> name; ?></td>
    			<td><?php echo $element -> role; ?></td>
    			<td><img width="60px;" src="public/media/work/<?php echo $element -> reviewer_image ?>"></td>
    			<td><?php echo $element -> review; ?></td>
    			<td>Active</td>
    			<td>edit||delete</td>
    		</tr>
    		
    	<?php }
    }
}
