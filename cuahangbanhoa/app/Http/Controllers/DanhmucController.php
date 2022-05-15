<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    public function index(Request $request){
        return view('admin/page/danhmuc/index');
    }
   
}