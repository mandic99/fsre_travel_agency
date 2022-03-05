@extends('layout.app')

@section('content')
<div>

                                <article class="tm-bg-white mr-2 tm-carousel-item">
                                    <img src="{{asset('img/img-01.jpg')}}" alt="Image" class="img-fluid">
                                    <div class="tm-article-pad">
                                        <header><h3 class="text-uppercase tm-article-title-2">{{$city->name}}</h3></header>
                                        
                                    <div>
                                    <p>{{$city->about}}</p>
                                    </div>
                                    </div>                                
                                </article> 
</div>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>        
  <script src="{{asset('js/popper.min.js')}}"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset('js/bootstrap.min.js')}}"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset('js/datepicker.min.js')}}"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="{{asset('slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->

@endsection