<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>gestion Pointages - @yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('images/ditt.jpg')}}"

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .active{
      color: #007bff !important;
      }
    </style>

    
    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">example de pointages</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="{{ (request()->is('sous-directions')) ? 'active' : ''}} p-2 text-dark"  href="{{ url('sous-directions') }}">sous-direction</a>
    <a class=" {{ (request()->is('agents')) ? 'active' : ''}} p-2 text-dark"  href="{{ url('agents') }}">agents</a>
    <a class=" {{ (request()->is('services')) ? 'active' : ''}} p-2 text-dark"  href="{{ url('services') }}">Services</a>
    
    <a class=" {{ (request()->is('pointages')) ? 'active' : ''}} p-2 text-dark"   href="{{ url('pointages') }}">Pointages</a>
    <a class=" {{ (request()->is('utilisateurs')) ? 'active' : ''}} p-2 text-dark"  href="{{ url('utilisateurs') }}">utilisteurs</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Se connecter</a>
</div>
<div style="margin: 20px; min-height: 600px">
@yield('content')
    </div>



  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class= "col-md-12 text-center">
        <img src="{{asset('images/ditt.jpg')}}" 
        width="50" height="50"> 
        <span>&copy; DITT 2019</span>
        <span class="float-right">{{ date('d/m/y') }}</span>


      
    
  </footer>
</div>
</body>
</html>

