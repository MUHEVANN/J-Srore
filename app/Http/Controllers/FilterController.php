<?php

namespace App\Http\Controllers;

use App\Models\cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function Mens(){
        $baju_l = DB::table('cloths')
                ->where('gender', '=', 'L')
                ->get();
        return view('home.laki',['baju_l' => $baju_l]);
    }
    public function Women(){
        $baju_l = DB::table('cloths')
                ->where('gender', '=', 'P')
                ->get();
        return view('home.women',['baju_l' => $baju_l]);
    }
}