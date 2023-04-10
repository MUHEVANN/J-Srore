<?php

namespace App\Http\Controllers;

use App\Models\cloth;
use Illuminate\Http\Request;

class DetailProduct extends Controller
{
    public function show(string $id){
        $data = cloth::where('id',$id)->first();
        return view('detail-product')->with('data',$data);
    }
}