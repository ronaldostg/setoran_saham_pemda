<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Setoran Saham</title>

  <!-- Google Font: Source Sans Pro -->
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@yield('plugin-css')



@include('layout.header')

@include('layout.sidebar')



    @yield('content')

  





  @include('layout.footer')


</div>
<!-- ./wrapper -->
@yield('plugin-js')
</body>
</html>
