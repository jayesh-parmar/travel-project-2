<?php

namespace App\Http\Controllers;

use App\Models\ContactBackend;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //

    public function form_store(Request $request)
    {
        $data = new ContactForm;
        $data->name=$request->name;
        $data->email=$request->email; 
        $data->subject=$request->subject;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }
    
    
    public function contact_deteil(Request $request)
    {
        $search=$request->search;
        if($request->search)
        $data = ContactForm::where('name','LIKE','%'.$search.'%' )->orwhere('email','LIKE','%'.$search.'%' )->get();
        else
        {
            $data=ContactForm::all();
        }
        return view('backend.pages.contact',['contact'=>$data]);
    }
    public function removeMulti(Request $request)
    {
        $ids = $request->ids;
        ContactForm::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"Customer successfully removed."]);
         
    }

    public function contact_backend()
    {
        $data=ContactBackend::find(1);
        return view('backend.pages.contact_backend',['data'=>$data]);
    }
    public function contact_backend_data(Request $request)
    {
        $id=1;
        $data= ContactBackend::find($id);
        $data->title=$request->title;
        $data->address=$request->address;
        $data->phone_pumber=$request->phone_pumber;
        $data->website=$request->website;
        $image= $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;
        $data->save();
        
        return redirect()->back()->with('status',"This is Success Message");

        // return view('backend.pages.contact_backend');
    }
}
