<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function index(){
    //     if(Auth::user()->hasRole('admin')){
    //         return view('home.index');
    //     }else{
    //         return view('welcome');
    //     }
    // }
}