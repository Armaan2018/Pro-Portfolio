<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;


class ExperienceController extends Controller
{
    public function index()
    {
    	return view('admin.sections.experience');
    }

    public function experienceCreate(Request $request)
    {


    	// $request -> validate([

       	    
     //   	    'educlass' => 'required|unique:educations',
     //   	    'passedfrom' => 'required',
     //   	    'years' => 'required',

     //   ]);


    	






    	Experience::create([

    		'role'      => $request -> role, 
    		'years'    => $request -> years, 
    		'description'   => $request -> description,





    	]);
    }



    public function experienceShow()
    {
    	$bloget = Experience::latest()->get();

    	$i = 1;

    	foreach ($bloget as $element) { ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> role; ?></td>
    			<td><?php echo $element -> years; ?></td>
    			<td><?php echo $element -> description; ?></td>
    			<td>Active</td>
    			<td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#" id="exp_edit_btn" exp_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_exp_id" del_exp_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
    		</tr>
    		
    	<?php }
    }


     public function expDelete($id)
    {
       $blogdel = Experience::findOrFail($id);
       $blogdel -> delete();

    }
}
