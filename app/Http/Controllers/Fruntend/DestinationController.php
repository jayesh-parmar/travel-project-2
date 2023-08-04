<?php

namespace App\Http\Controllers\Fruntend;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Post;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $data =Post::paginate(9);
        $ddata=Description::find(1);
 
     return view('pages/destination',['posts' => $data,'ddata'=>$ddata]);
        
    }
}
