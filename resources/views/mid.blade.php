@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                    <a href="{{ route('login') }}" class="btn btn-block btn-primary" style="width:300px; height:50px; margin-top:200px; margin-bottom:200px; margin-left:200px;">Login</a>
            </div>
            <div class="col-md-6">
                    <a href="{{ route('register') }}" class="btn btn-block btn-secondary" style="width:300px; height:50px; margin-top:200px; margin-bottom:200px; ">Register</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection