<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Str;


class EducationController extends Controller
{
    public function index()
    {
    	return view('admin.sections.education');
    }

    public function educationCreate(Request $request)
    {


    	$request -> validate([

       	    
       	    'educlass' => 'required|unique:education',
       	    'passedfrom' => 'required',
       	    'years' => 'required',

       ]);


    	






    	Education::create([

    		'educlass'      => $request -> educlass, 
    		'passedfrom'    => $request -> passedfrom, 
    		'years'         => $request -> years,
    		'description'   => $request -> description,





    	]);
    }



    public function educationShow()
    {
    	$bloget = Education::latest()->get();

    	$i = 1;

    	foreach ($bloget as $element) { ?>

         <?php $shorten =  Str::of(htmlspecialchars($element -> description))->words(10) ?>
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> educlass; ?></td>
    			<td><?php echo $element -> passedfrom; ?></td>
    			<td><?php echo $element -> years; ?></td>
    			<td><?php echo $shorten; ?></td>
    			<td>Active</td>
    			<td class="color-primary"><div class="d-flex">
                            <a href="" data-toggle="modal" data-target="#edueditmodal" id="edu_edit_btn" edu_edit_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
                              
                            </i></a>
                            <a href="" id="del_edu_id" del_edu_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                          </div></td>
    		</tr>
    		
    	<?php }
    }


     public function educationDelete($id)
    {
       $blogdel = Education::findOrFail($id);
       $blogdel -> delete();

    }


    public function educationEdit($id)
    {
       $edu = Education::findOrFail($id);

       return [

        'id'                => $edu -> id,
        'educlass'          => $edu -> educlass,
        'passedfrom'        => $edu -> passedfrom,
        'years'             => $edu -> years,
        'description'       => $edu -> description,




       ];
    }


    public function educationUpdate(Request $request)
    {  
        $recheck = $request -> get_id_edu;
       $check =  Education::findOrFail($recheck);

       $check -> educlass    = $request -> educlass;
       $check -> passedfrom  = $request -> passedfrom;
       $check -> years       = $request -> years;
       $check -> description = $request -> description;
       $check -> update();

    }
}
