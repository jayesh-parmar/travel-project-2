<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookTripe;
use App\Models\Plans;
use App\Models\Questions;
use App\Models\TravelBackend;
use Illuminate\Http\Request;

class TravelBackendController extends Controller
{
    public function travel_backend()
    {
        $id=1;
        $data=TravelBackend::find($id);
        $starter= Plans::all();
       // return $starter;
         return view('backend/pages/pricing_backend',['pricing'=>$data,'data'=>$starter, ]);
    }

    public function plans(Request $request , $id)
    {
        
        $data=Plans::find($id);
        $data->p_name=$request->p_name;
        $data->p_price=$request->p_price;
        $data->p_description=$request->p_description;
        $data->project=$request->project;
        $data->pages=$request->pages;
        $data->email=$request->email;
        $data->image=$request->image;
        $data->link=$request->link;
        $data->save();

        return redirect()->back();
    }

    public function travel_backend_store(Request $request)
    {
        
        $id=1;
        $data= TravelBackend::find($id);
        $data->banner_title=$request->banner_title;
        $data->pricepage_title=$request->pricepage_title;
        $data->pricepage_description=$request->pricepage_description;
        $data->info_title=$request->info_title;
        $data->info_description=$request->info_description;
        $pimage= $request->pimage;
        $imagename=time().'.'.$pimage->getClientOriginalExtension();
        $request->pimage->move('images',$imagename);
        $data->pimage=$imagename;
        $data->save();

        return redirect('pricing_backend');

    }

    public function travel_backend_show()
    {
        $id=1;
        $data= TravelBackend::find($id);
        $pdata= Plans::all();
        $qdata=Questions::all();

        return view('pages/pricing',['traveldata' => $data,'plans' => $pdata , 'qdata'=>$qdata ]);
    }
    

     function edit_plans()
     {
    
        $pdata= Plans::all();
        
        return view('backend/pages/plans',['plans' => $pdata]);
 
     }
     function questions(Request $request)
     {
    
        $data= new Questions;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        
        return redirect()->back();

 
     }

    





     
    //  function update_posts($id)
    //  {
    //     $data= BookTripe::find($id);

    //     return view('customer/update_posts',['customers_data' => $data]);
         
    //  }


}
