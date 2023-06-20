
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
<div class="container-fluid">
    <div class="lead text-black text-center"><h1>Meet Our Team</h1></div>
    <div class="row ms-2">
        <div class="col-3">
        <div class="card">
            
           <img src="{{URL("storage/assets/person1.avif")}}" alt="Image">
           <p class="display-6 fs-5 text-center">Veronica Nanjala</p>
           <p class="lead text-muted text-center">Hotel Manager</p>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                
               <img src="{{URL("storage/assets/person2.avif")}}" alt="">
               <p class="display-6 fs-5 text-center">Maryline Waithanjo</p>
           <p class="lead text-muted text-center">Receptionist</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    
                   <img src="{{URL("storage/assets/person3.avif")}}" alt="">
                   <p class="display-6 fs-5 text-center">Mary Adhiambo</p>
                   <p class="lead text-muted text-center">Concierge</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        
                       <img src="{{URL("storage/assets/chef3.avif")}}" alt="">
                       <p class="display-6 fs-5 text-center">Richard Ouma</p>
                       <p class="lead text-muted text-center">Chef</p>
                        </div>
                    </div>
                   
    </div>
</div><br><br>
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-4">
            <div class="card">
            <div class="display-4">Innovation</div>
            <p class="lead fs-6">We offer solutions to our clients by applying the latest technologies available.This allows us to solve business problems more effectively</p>
        </div>
        </div>
        <div class="col-4">
            <div class="card">
            <div class="display-4">Respect</div>
            <p class="lead fs-6">The way we review our clients is one of the weAlive's defining characters.We partner up with our clients to overcome problems together</p>
        </div>
        </div>
        <div class="col-4">
            <div class="card">
            <div class="display-4">Intrgrity</div>
            <p class="lead fs-6">Developing close honest relationships with our clients means we are genuinely driven to see them find access.This is what brings out our bes works</p>
        </div>
        </div>
    </div>
</div>
</html>

@stop