
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurantt</title>
</head>
<body style="background-color:rgba(197, 170, 170, 0.188)">
    <div class="container">
        <div class="row pt-5">
            <div class="col-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.6210861255!2d36.88612097937805!3d-1.2257907802000572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15860e184297%3A0xfdf644bd95b34426!2sSportsview%20Hotel%20Kasarani!5e0!3m2!1sen!2ske!4v1687283485850!5m2!1sen!2ske" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-4">
                <fieldset border="1">

                <form>
                    <div class="mb-3">
                        
                            <label for="fname">FistName</label>
                            <input type="text"  id="fname" name="fname">
                          </div>
                 <div class="mb-3">
                      <label for="lname">Last Name</label>
                      <input type="text"  id="lname"  name="lname"">
                 </div>
                    
                    <div class="mb-3 ">
                      <label class="email" >Email</label>
                      <input type="email" id="email">                      
                    </div>
                    <button type="submit" class="btn btn-dark ms-5 color-white">Submit</button>
                  </form>
                </fieldset>
            </div>
        </div><br><br>
        <div class="container-fluid bg-light">
            <div class="lead text-muted pt-2">
                <P>Email:<span class="text-primary">biwami@reesto.com<span></P>
        
            </div>
            <div class="display-6 pb-2">
                <p class="text-primary">25479093719</p>
            </div>
        </div>
   
    </div>
</body>
</html>
@stop