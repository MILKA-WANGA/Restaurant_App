
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
         <img src="{{  URL('storage/assets/resto1.jpg') }}"  width="100%" height="70%"  alt="image" id="firstImage" ><br><br>
         <img src="{{  URL('storage/assets/resto1.jpg') }}"  width="50%" height="40%"  alt="image" id="firstImage" >
        </div>

    </div>
  
</body>
</html>
@stop