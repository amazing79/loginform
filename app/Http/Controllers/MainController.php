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
       try{

           if(empty(trim($nombre))) {
               throw new \InvalidArgumentException('El nombre del usuario no puede ser vacio');
           }
           $users = [];
           $users[] = $nombre .'-'. $mail. '-'.$password;
           $result['message'] = 'Usuario registrado con exito';
           $result['http_status'] = 200;
       } catch ( \InvalidArgumentException|\Exception $e) {
           $result['message'] = 'Ocurrió un error al registrar el usuario: ' . $e->getMessage();
           $result['http_status'] = 400;
       }

       return response($result['message'], $result['http_status']);

    }
}
