<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

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
    		<tr>
    			<th><?php echo $i; $i++; ?></th>
    			<td><?php echo $element -> educlass; ?></td>
    			<td><?php echo $element -> passedfrom; ?></td>
    			<td><?php echo $element -> years; ?></td>
    			<td><?php echo $element -> description; ?></td>
    			<td>Active</td>
    			<td>edit||delete</td>
    		</tr>
    		
    	<?php }
    }
}
