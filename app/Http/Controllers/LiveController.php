<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LiveController extends Controller
{
    public function live() 
    {
    	return view('live');
    }
}
