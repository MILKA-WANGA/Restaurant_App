@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BiWaMi Restaurant</title>
</head>
<body>
    <div class="container align-items-center mt-5">
        <div class="shadow " style="width:300px; height:250px;margin-left:30%" >
            <h3 class="text-center text-muted text-lead">Enter your email</h3>
            <center>
            <form action="/password"  method="POST"  id="form1" class="p-2 m-2 bg-light "style="margin-bottom:20px;" >
                  @csrf
                <div class="form-group">
                    <label for="email">Email:</label>      
                    <input class="form-control" type="email" name="email" placeholder="example@gmail.com"><br><br></div>
                <div class="form-group">
                     <button class="btn  btn-block btn-primary " style="text-size:4px" type="submit">Reset Password Link</button>
                </div>
               
                <a href="/login" style="text-decoration:none;font-size:12px;">Login</a><br><br>
                

            </form>
        </center>
       
        </div>
    </div>




    
</body>
</html>
@stop