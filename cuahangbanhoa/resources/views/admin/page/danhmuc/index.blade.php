
@extends('admin.layouts.master')
@section('title','DANH DỤC | ')

@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DASHBOARD /</span>DANH MỤC SẢN PHẨM</h4>
              <div class="container">
                <div class="row">
                 <div class="col-sm-9"></div>
                 <div class="col-sm-3 "><a class="btn btn-primary" href="{{url('admin/danhmuc/create')}}" ><i class='bx bxs-plus-circle'></i> Thêm danh mục</a></div>
                </div>
              </div>

              <!-- Basic Bootstrap Table -->
              <div class="card">
          
                <h5 class="card-header">DANH MỤC SẢN PHẨM</h5>          
                <div class="table-responsive text-nowrap">

                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">    

                      @foreach($danhmuc as $item_danhmuc)
                     
                      <tr>
                       <td>{{ $item_danhmuc->id }}</td>
                       <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>{{ $item_danhmuc->tendanhmuc }}</strong></td>
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{url('admin/danhmuc/edit/'.$item_danhmuc->id)}}"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="{{url('admin/danhmuc/delete/'.$item_danhmuc->id)}}"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                        </tr>
                       @endforeach
                      
                    
                    </tbody>
                  </table>

                </div>
              </div>

@endsection