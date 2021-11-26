<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\File;
use Illuminate\Support\Str;



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
            <?php $shorten =  Str::of(htmlspecialchars($element -> review))->words(10) ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> name; ?></td>
    			<td><?php echo $element -> role; ?></td>
    			<td><img width="60px;" src="public/media/work/<?php echo $element -> reviewer_image ?>"></td>
    			<td><?php echo $shorten; ?></td>
    			<td>Active</td>
    			<td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#editreviewmodal" id="rev_edit_btn" rev_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_rev_id" del_rev_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
    		</tr>
    		
    	<?php }
    }


    public function reviewEdit($id)
    {
        $get_edit_data = Review::findOrFail($id);

        return [

            'name'   => $get_edit_data -> name,
            'id'     => $get_edit_data -> id,
            'image'  => $get_edit_data -> reviewer_image,
            'review' => $get_edit_data -> review,
            'role' => $get_edit_data -> role,



        ];
    }

    public function reviewUpdate(Request $request)
    {
       $check = $request -> get_id_review;
       $review_update = Review::findOrFail($check);

       $unique_file_name = $request -> old_reviewer_img;

         if ($request -> hasFile('reviewer_image')) {

            $img = $request -> file('reviewer_image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);

             File::delete('public/media/work/'.$request-> old_reviewer_img);
        }



       $review_update -> name = $request -> name;
       $review_update -> role = $request -> role;
       $review_update -> review = $request -> review;
       $review_update -> reviewer_image = $unique_file_name;
       $review_update -> update();

    }


    public function reviewDelete($id)
    {
       $rev = Review::findOrFail($id);
       $rev -> delete();
        File::delete('public/media/work/'.$rev-> reviewer_image);

    }
}
