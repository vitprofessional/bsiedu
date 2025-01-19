<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactform(){
       return view('frontend.add-contact');
    }
}
