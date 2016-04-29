<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class IndexController extends Controller
{
    public function home() 
    {
    	return view('home');
    }

    public function capture() 
    {
    	return view('capture');
    }

    public function delivery() 
    {
    	return view('delivery');
    }
}
