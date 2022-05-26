@extends('admin.layouts.master')
@section('title','DASHBOARD | ')

@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">

Today:
                  <script>
                    var day= new Date().getDate();
                    var month= new Date().getMonth()+1;
                    var year= new Date().getFullYear();
                    document.write( day+"/"+month+"/"+year);
                  </script>
                  , Good day ❤️ !
                  <b class="footer-link fw-bolder">ADMIN</b>
</div>

@endsection