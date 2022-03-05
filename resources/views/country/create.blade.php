@extends('layouts.app')
@section('content')
<html>

<body>
<div class="col-md-8">
<form action="{{route('countries.store')}}" method="post">
@csrf
<input class="form-control" type="text" placeholder="Unesi ime drzave" name="name"><br><br>


<button type="submit" class="btn btn-secondary"value="submit">Submit</button>

</form>
</div>
</body>
</html>
@endsection