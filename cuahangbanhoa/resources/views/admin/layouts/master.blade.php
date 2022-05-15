<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>ADMIN | Dashboard</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/favicon/florist.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/boxicons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ url('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('assets/js/config.js') }}"></script>

    @yield('custom-css')
</head>
    
<body>
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">

@include('admin.layouts.sidebar')
@include('admin.layouts.topbar')

<div class="content-wrapper">
@yield('main-content')

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

@include('admin.layouts.footer')
</div>


</div>
</div>

@include('admin.layouts.scripts')
@yield('custom-script')
</body>
</html>