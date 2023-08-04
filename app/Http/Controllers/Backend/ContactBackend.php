<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactBackend extends Controller
{
    public function contact_backend()
    {
        return view('backend.pages.contact_backend');
    }
}
