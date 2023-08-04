<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionBackendController extends Controller
{
    public function description_backend()
    {
        $data=Description::find(1);
        return view('backend.pages.description_backend',['descrription'=>$data]);
    }

    public function description_backend_update(Request $request)
    {
        $id=1;
        $data=Description::find($id);
        $data->title=$request->title;
        $data->post_title=$request->post_title;
        $data->post_description=$request->post_description;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        $data->save();

        return redirect()->back();
    }
}
