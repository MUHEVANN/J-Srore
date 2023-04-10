<?php

namespace App\Http\Controllers;

use App\Models\cloth;
use Illuminate\Http\Request;

class Guest extends Controller
{
    public function index(){
       
        $data = cloth::get()->all();
        return view('welcome', ['data' => $data]);
    }
    public function show(string $id){
        $data = cloth::where('id',$id)->first();
        return view('detail-product')->with('data',$data);
    }
}