<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
   function index()
   {
       return View('index');
   }

    function register()
    {
        return View('pages.register');
    }

    function dashboard()
    {
        return View('pages.dashboard');
    }
}
