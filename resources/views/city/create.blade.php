@extends('layouts.app')
@section('content')
<html>

<body>
<div class="col-md-8">
<form action="{{route('cities.store')}}" method="post">
@csrf
<label for="city"><h2>Grad</h2></label>
<input class="form-control" type="text" placeholder="Unesi ime grada" name="name"><br><br>

<label for="country"><h2>Drzava</h2></label>
<select class="form-control" name="country_id" id="country_id">
@foreach ($countries as $country)
<option value="{{$country->id}}">{{$country->name}}</option>
    
@endforeach
</select>



<label for="name"><h2>O putovanju</h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"></textarea><br><br>

<button type="submit" class="btn btn-secondary"value="submit">Submit</button>

</form>
</div>
</body>
</html>
@endsection