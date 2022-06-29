<?php

namespace App\Http\Controllers;
use App\Models\Students;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $data["students"] = Students::all();
        return view("home",$data);
    }

    public function store(Request $req){
        $std = new Students();
        $std->name = $req->name;
        $std->contact = $req->contact;
        $std->email = $req->email;
        $std->save();

        return redirect()->route("homepage");
    }
    public function remove($id){
        $std = Students::find($id);
        $std->delete();
        return redirect()->back();
    }
}
