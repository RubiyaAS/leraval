<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        echo "hello from controller";
    }
    function index1($name)
    {
        echo $name;
        echo "helooo";
    }
    function about()
    {
        
        return view('about',['user'=>'anil']);
    }
    function fun()
    {
        $data=['anil','peter'];
        return view('about',['user'=>$data]);
    }
    function login(Request $req)
    {
        return $req->input();
    }
    }

