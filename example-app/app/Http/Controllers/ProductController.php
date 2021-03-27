<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function productAdd(Request $req)
    {
        $member=new Product;
        $member->productname=$req->productname;
        $member->price=$req->price;
        $member->quantity=$req->quantity;
        $member->save();
        return redirect('add');
    }
    function datalist(){
        $data=Product::all();
        return view('tableview',['data'=>$data]);
        }

        function delete($id)
        {
            $data=Product::find($id);
            $data->delete();

        }

        function update($id)
        {
            $data=Product::find($id);
           return view('updateproduct',['data'=>$data]);


           
        }
        function edit_view(Request $req)
        {
            $m=Product::find($req->id);
            $m->productname=$req->productname;
            $m->price=$req->price;
            $m->quantity=$req->quantity;
            $m->save();
            return redirect('tableview');

        }
        function profilepage(Request $req)
        {
            $data=$req->input();
        }
        
        function profilesession(Request $req)
        {
            $data=$req->input();
            $req->session()->put('user',$data['username']);
            return redirect('pro');
        }
        function registersession(Request $req)
        {
            $data=$req->input();
            $req->session()->put('user',$data['username']);
            return redirect('page');
        }
       
        }

