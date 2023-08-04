<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home_backend(){

        return view('backend/pages/home-page-backend');
    }
    public function home_backend_store(Request $request){
        $id=2;
        $data= HomePage::find($id);
        $data->banner_title=$request->banner_title;
        $data->post_title=$request->post_title;
        $data->post_description=$request->post_description;
        $data->testimonial_title=$request->testimonial_title;
        $data->testimonial_description=$request->testimonial_description;
        $data->test_title1=$request->test_title1;
        $data->test_title2=$request->test_title2;
        $data->test_title3=$request->test_title3;
        $data->test_description1=$request->test_description1;
        $data->test_description2=$request->test_description2;
        $data->test_description3=$request->test_description3;
        $data->ov_title=$request->ov_title;
        $data->ov_description=$request->ov_description;
        $data->ov_hotels=$request->ov_hotels;
        $data->ov_travelars=$request->ov_travelars;
        $data->happy_customer=$request->happy_customer;
        $data->ov_destination=$request->ov_destination;
        $data->about_desciption=$request->about_desciption;
        $data->ad_phone_number=$request->ad_phone_number;
        $data->ad_email=$request->ad_email;
        $data->ad_live_chet=$request->ad_live_chet;
        $data->sl_twiter=$request->sl_twiter;
        $data->sl_facebook=$request->sl_facebook;
        $data->sl_linkedln=$request->sl_linkedln;
        $data->center_title=$request->center_title;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->image=$imagename;

        $data->save();
         return redirect('/home-page-backend');
    }

    // public function home_backend_show()
    // {
    //     $id=2;
    //     $data = HomePage::find($id);
    //     $pdata= Post::all();
    //      return view('pages/home',['data'=>$data,'posts'=>$pdata]);
         
    
    // }
        public function showd()
        {
            return view('pdf_view');
        }


    
}
