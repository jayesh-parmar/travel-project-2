<?php

namespace App\Http\Controllers\Fruntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        return view('pages/travel');
    }
}
