<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHelp()
    {
    	return view('sys/help');
    }

    public function getHome()
    {
    	return view('sys/home');
    }
    public function getUserList()
    {
    	return view('user/list');
    }
    public function getUserAdd()
    {
    	return view('user/add');
    }
}
