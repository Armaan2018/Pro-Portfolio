<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{
	public function index()
	{
		return view('admin.sections.service');
	}

	public function serviceStore(Request $request){

       $request -> validate([

       	    'title' => 'required|unique:services',
       	    'icon' => 'required',
       	    'description' => 'required',
       	    'servicelink' => 'required'



       ]);


       Service::create([

       	'title'       => $request -> title,
       	'icon'        => $request -> icon,
       	'servicelink' => $request -> servicelink,
       	'description' => $request -> description,


       ]);




       return response()->json(['success','successfully done']);

    	

    }



    //service show

    public function serviceShow()
    {
    	$data = Service::latest()->get();

         $i = 1;
    	foreach ($data as $element) { ?>
    		<tr>
                                                <th><?php echo $i; $i++; ?></th>
                                                <td><?php echo $element -> title; ?></td>
                                                <td><i style="font-size: 30px;" class="<?php echo $element -> icon; ?>"></i>
                                                </td>
                                                <td><?php echo $element -> description; ?></td>
                                                <td><a class="text-info" href="<?php echo $element -> servicelink; ?>"><?php echo $element -> servicelink; ?></a></td>
                                                
                                                <td>Active</td>
                                                <td class="color-primary"><div class="d-flex">
														<a href="#service_edit_modal" data-toggle="modal" data-target="#service_edit_modal" id="edit_btn_id" edit_btn_attr="<?php echo $element -> id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil">
															
														</i></a>
														<a href="" id="del_btn_id" del_btn_attr="<?php echo $element -> id ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div></td>
                                            </tr>
                                            
    	<?php }

    }



    public function serviceDelete($id)
    {
    	$data = Service::findOrFail($id);
    	$data -> delete();
    } 

    public function serviceEdit($id)
    {
    	$data = Service::findOrFail($id);
    	return [
    		 'hiddenid'    => $data -> id,
             'title' => $data -> title,
             'icon' => $data -> icon,
             'servicelink' => $data -> servicelink,
             'description' => $data -> description,

    	];
    }  


    public function serviceUpdate(Request $request)
    {
    	$findid = $request -> hiddenid;
    	$data = Service::findOrFail($findid);
    	$data -> title = $request -> title;
    	$data -> icon  = $request -> icon;
    	$data -> servicelink = $request -> servicelink;
    	$data -> description = $request -> description;

    	$data -> update();
    
    }
   
}
