<?php

namespace TheNetwork\Http\Controllers;

use Illuminate\Http\Request;

use TheNetwork\Http\Requests;
use TheNetwork\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function auth()
    {
    	return view('auth');
    } 


    public function backend()
    {
    	return view('backend');
    }
}
