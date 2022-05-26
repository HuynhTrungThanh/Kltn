<?php

namespace App\Http\Controllers;
use App\Models\danhmuc;

use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    public function index(){
        $danhmuc = danhmuc::all();
        return view('admin/page/danhmuc/index',compact('danhmuc'));
    }
    public function create(){

        return view('admin/page/danhmuc/create');
    }
    public function save(Request $request){
        $data=$request->all();
        $danhmuc=new danhmuc;
        
        $danhmuc->tendanhmuc= $data['ten'] ;
        $danhmuc->mota= $data['mota'] ;
        
        $danhmuc->save();
		return redirect()->route('danhmuc.index');
    }
    public function edit($id){

      $danhmuc=danhmuc::find($id);
      return view('admin/page/danhmuc/edit',compact('danhmuc'));
    }
    public function update(Request $request,$id){
        $data=$request->all();
        $danhmuc=danhmuc::find($id);
        
        $danhmuc->tendanhmuc= $data['ten'] ;
        $danhmuc->mota= $data['mota'] ;
        
        $danhmuc->save();
		return redirect()->route('danhmuc.index');
    }
    public function delete(Request $request, $id){

        danhmuc::where('id',$id)->delete();
        return redirect()->route('danhmuc.index');
    }
   
}