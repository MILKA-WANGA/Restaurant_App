
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
</head>
<body>
    <div class="container-fluid">
    <h1 class="lead text-center pt-5" >About Us</h1><br><br>
    <div class="row">
        <div class="col-6">
            <img src="{{URL("storage/assets/building.jpg")}}" alt="image" width="90%" height="90%" >
        </div>
        <div class="col-6">
        <div class="display-2 fs-8">Our Vision</div>
    <div class="lead text-muted">
        <p>Our vision is to be the most sought after digital agency in Australia, facilitating sustainable growth and prosperity for our local and international clients. We are continuously evolving to become an industry leader in the vibrant field of web technologies.</p>
    </div>
    </div>
    </div>
</div>
</body>
</html>

@stop