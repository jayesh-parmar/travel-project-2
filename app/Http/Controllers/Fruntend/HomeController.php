<?php

namespace App\Http\Controllers\Fruntend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('pages/home');
    // }

    public function show(Request $request)
    {
       
       $posts= Post::paginate(6);
       $data=compact('posts');
        
         return view('pages/home')->with($data);
    }

    // public function multipleFunctions()
    // {
    //     $result_one = $this->index();
    //     $result_two = $this->show();
        

    //     // You can process the results as needed
    //     // For this example, let's just concatenate the results
    //     $combined_result = "{$result_one} {$result_two}";

    //     return $combined_result;
    // }
}
