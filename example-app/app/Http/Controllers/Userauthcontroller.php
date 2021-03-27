<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\auth;

class Userauthcontroller extends Controller
{
    //validation
    function login_vali(Request $req)
{

    $req->validate([
       'fullname'=>'required',
      'email'=>'required|email|unique:auths',
      'password'=>'required|min:5|max:12'
      ]);



$data=new Auth ;
    $data->fullname=$req->fullname;
    $data->email=$req->email;
    $data->password=Hash::make($req->password);
    $query=$data->save();
    if($query)
    {
        return back()->with('sucess','sucessfully registered');
    }
    else{
        return back()->with('fail','something wrong');
    }
    
}
function dash(Request $req)
{
    $data=['LoggedUserInfo'=>Auth::where('id','=',session('LoggedUser'))->first()];
return view('dashboad',$data);
}
function check(Request $req)
{

    $req->validate([
       
      'email'=>'required|email',
      'password'=>'required',
      ]);
      $userinfo=Auth::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Your email is not recognized!');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->session()->put('LoggedUser',$userinfo->id);
                return redirect('dashboard');

            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }

    }

    function logout()
    {
        if(session()->has("LoggedUser"))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    
}