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
    			<td>edit||delete</td>
    		</tr>
    		
    	<?php }
    }
}
