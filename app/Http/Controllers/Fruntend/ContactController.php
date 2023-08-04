<?php

namespace App\Http\Controllers\Fruntend;

use App\Http\Controllers\Controller;
use App\Models\ContactBackend;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $data= ContactBackend::find(1);
        return view('pages/contact',['data'=>$data]);
    }
}
