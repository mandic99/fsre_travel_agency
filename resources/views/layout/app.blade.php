<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FSRE Travel Agency</title>
 
<!--

Template 2095 Level

http://www.tooplate.com/view/2095-level

-->
<style type="text/css">
  
</style>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/datepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
          <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="{{asset('logo.png')}}" alt="Site logo" width="55px" height="55px" >
                                FSRE Travel Agency
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}#top">Početna <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}#tm-section-4">Putovanja</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}#tm-section-6">Kontakt</a>
                                  </li>
                                  @if(Auth::check())
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{route('trips.index')}}">My Trips</a>
                                  </li>
                                  @else
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('mid') }}" target="_blank">Prijava/Registracija</a>
                                                                   
                                  </li>
                                  @endif
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
  @yield('content')
              <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2020</span> FSRE Travel Agency
                        
                </p>        
                    </div>
                </div>                
            </footer>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>        
  <script src="{{asset('js/popper.min.js')}}"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset('js/bootstrap.min.js')}}"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset('js/datepicker.min.js')}}"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="{{asset('slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->

</body>
</html>

