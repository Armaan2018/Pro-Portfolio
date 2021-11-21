<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

            <?php $shorten =  Str::of(htmlspecialchars($element -> content))->words(10) ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> title; ?></td>
    			<td><img width="60px;" src="public/media/work/<?php echo $element -> image ?>"></td>
    			<td><?php echo $shorten; ?></td>
    			<td>Active</td>
    			<td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#" id="blog_edit_btn" blog_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_blog_id" del_blog_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
    		</tr>
    		
    	<?php }
    }



    public function blogDelete($id)
    {
       $blogdel = Blog::findOrFail($id);
       $blogdel -> delete();

    }
}
