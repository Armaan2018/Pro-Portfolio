<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
    	return view('admin.sections.blog');
    }

    public function blogCreate(Request $request)
    {


    	$request -> validate([

       	    'title' => 'required|unique:blogs',

       ]);


    	 $unique_file_name = '';

        if ($request -> hasFile('image')) {

            $img = $request -> file('image');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);
        }






    	Blog::create([

    		'title'   => $request -> title, 
    		'content' => $request -> content, 
    		'image'   => $unique_file_name





    	]);
    }



    public function blogShow()
    {
    	$bloget = Blog::latest()->get();

    	$i = 1;

    	foreach ($bloget as $element) { ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> title; ?></td>
    			<td><img width="60px;" src="public/media/work/<?php echo $element -> image ?>"></td>
    			<td><?php echo $element -> content; ?></td>
    			<td>Active</td>
    			<td>edit||delete</td>
    		</tr>
    		
    	<?php }
    }
}
