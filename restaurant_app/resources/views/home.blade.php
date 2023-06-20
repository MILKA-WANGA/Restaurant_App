
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
            <p class="Lead text-success">Read More </p>
        </div>
        <div class="col">
            <h1 class="lead text-center text-center">Our Mission</h1>
            <p>Our restaurant strives to become our customers’ favorite place to eat and drink.</p>
            <p class="Lead text-success text-center">Read More </p>
        </div>
        </div>
    </div><br><br>
    <div class="container-fluid bg-light">
        
        <div class="row ms-2 mt-5">
            <div class="col-8">
         <img src="{{  URL('storage/assets/cake.webp') }}"  width="100%" height="90%"  alt="image" id="firstImage" ></div>
         <div class="col-4 ps-0" >
            <p>Superior service, personalized attention
                We're proud to offer the highest quality, freshest diner food on The Main Line. From our family to yours, we put lots of love and careful attention in each item. We hope you enjoy our work as much as we enjoy bringing it to you.
                
                A local favorite since 1971, Minella’s offers an extensive menu with everything imaginable at a diner, including salads, soups, soft drinks, desserts, breakfast foods, eggs, pancakes, waffles, hot and cold sandwiches, burgers, wraps, seafood, steak, plus Italian and Greek specialties.
                
                All baking is done on the premises, and credit cards are accepted. We also offer a full bar menu.
                
                It's our honor to serve you. Welcome and enjoy! </p>
        </div>
    </div>
  
</body>

</html>
@stop