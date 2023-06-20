
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
            <div class="col-5">
         <img src="{{  URL('storage/assets/resto1.jpg') }}"  width="70%" height="80%"  alt="image" id="firstImage" ></div>
         <div class="col-3 ps-0" ><h1 class="lead text-center">About Us</h1>
            <p>The diner is open from 6 am to 10 pm --and free parking is available behind our location at 320 Lancaster Ave, Wayne, Pennsylvania </p>
        </div>
        <div class="col">
            <h1 class="lead text-center">our Mission</h1>
            <p>Our restaurant strives to become our customers’ favorite place to eat and drink.</p>
        </div>
        </div>
    </div>
    <div class="container">
        
        <div class="row ms-2 bg-color-light">
            <div class="col-4">
         <img src="{{  URL('storage/assets/resto1.jpg') }}"  width="70%" height="80%"  alt="image" id="firstImage" ></div>
         <div class="col-8 ps-0" ><h1 class="lead text-center">About Us</h1>
            <p>The diner is open from 6 am to 10 pm --and free parking is available behind our location at 320 Lancaster Ave, Wayne, Pennsylvania </p>
        </div>
    </div>
  
</body>
C:\xampp\htdocs\Restaurant_Laravel_Project\restaurant_app\public\storage\assets\cake.webp
</html>
@stop