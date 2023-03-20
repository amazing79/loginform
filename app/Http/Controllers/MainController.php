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

    function add(Request $request)
    {
       $result=[];
       $nombre = $request->get('nombre');
       $mail = $request->get('mail');
       $password = $request->get('password');
       $confirmPassword = $request->get('confirPassword');

       $users = [];
       $users[] = $nombre .'-'. $mail. '-'.$password;
       $result['message'] = 'Usuario registrado con exito';
       $result['http_status'] = 200;

       return response($result['message'], $result['http_status']);

    }
}
