@extends('admin.layouts.master')
@section('title','DANH DỤC | ')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
  
<form action="{{url('admin/danhmuc/update',[$danhmuc->id])}}" method='POST'>
    @csrf
    <div class="card mb-4 ">
        <h5 class="card-header">Sửa Danh Mục</h5>
        <div class="card-body row">
            <div class="col-sm-10 mb-3">
                <label for="name" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control " id="ten" name="ten" aria-describedby="defaultFormControlHelp"
                       value="{{$danhmuc->tendanhmuc}}"
                />
            </div>
            <div class="col-sm-10 mb-3">
                <label for="mota" class="form-label">Mô tả</label>
                <textarea class="form-control" id="mota" name="mota" rows="3">{{$danhmuc->mota}}</textarea>
              </div>
            <div class="col-sm-10 mb-3">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
        </div>
</from>

</div>
@endsection