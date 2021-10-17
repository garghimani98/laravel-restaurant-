<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;

class RestoController extends Controller
{
    public function Index(){
         return view('home');
    }
    public function list(){
        $data= pizza::all();
        return view('list',["data"=>$data]);
   }
   public function add(Request $req){
    $member=new pizza;
    $member->name=$req->input('name');
    $member->type=$req->input('type');
    $member->base=$req->input('base');
    $member->save();
    $req->session()->flash('status','data entered successfully');
    return redirect('list');
    }

    function delete($id){
        $member=pizza::find($id);
        $member->delete();
        Session::flash('status','deleted successfully');
        return redirect('list');
    }

    function edit($id){
        $member=pizza::find($id);
        
        
        return view('edit');
    }


}
