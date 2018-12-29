<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        

        return view('dashboard.index');
    }

      public function create()
    {
        

        return view('dashboard.index');
    }


   public  function Show()
    {
    	return view('welcome');
    }
}
