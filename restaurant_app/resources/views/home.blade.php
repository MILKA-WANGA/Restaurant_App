
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
<body style="background-color:rgba(197, 170, 170, 0.188)">
    <div class="container bg-color-primary">
        <div class="images">
         <img src="{{  URL('storage/assets/resto11.jpg') }}"  width="100%" height="70%"  alt="image" id="firstImage" ></div><br><br>
        </div>
         <div class="row ms-2 bg-color-light">
            <div class="col-8">
         <img src="{{  URL('storage/assets/resto1.jpg') }}"  width="70%" height="80%"  alt="image" id="firstImage" ></div>
         <div class="col-3"><h1 class="lead text-center">About Us</h1>
            <p>We are the BiWaMi Restaurant that provides best services to its clients</p>
        </div>
        </div>
    </div>
    <div class="container">
        <h1 class="lead text-center">our Mission

        </h1>
        <div class="ms-5">
         
        </div>
    </div>
  
</body>
</html>
@stop