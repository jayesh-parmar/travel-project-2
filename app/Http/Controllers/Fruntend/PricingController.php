<?php

namespace App\Http\Controllers\Fruntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('pages/pricing');
    }
}
