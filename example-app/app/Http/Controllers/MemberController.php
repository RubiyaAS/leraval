<?php

namespace App\Http\Controllers;
use App\models\Member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //table add
    function memberAdd(Request $req)
    {
        $member=new Member;
        $member->member_name=$req->member_name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('view');
    }
    //table view
    function datalist(){
        $data=Member::all();
        return view('list',['data'=>$data]);
        }
        function delete($id)
        {
            $data=Member::find($id);
            $data->delete();

        }
        function update($id)
        {
            $data=Member::find($id);
           return view('update',['data'=>$data]);


           
        }
        function edit_view(Request $req)
        {
            $m=Member::find($req->id);
            $m->member_name=$req->member_name;
            $m->email=$req->email;
            $m->address=$req->address;
            $m->save();
            return redirect('view');
        }
        }
        
