@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BiWaMi</title>
</head>
<body>
    <div class="container align-items-center mt-5">
        <div class="shadow " style="width:300px; height:250px;margin-left:30%" >
            <h3 class="text-center text-muted text-lead">Login here</h3>
            <center>
            <form action="/login" id="form1" class="p-2 m-2 bg-light "style="margin-bottom:20px;" >
                <div class="form-group">
                <label for="email">Email:</label>      
                <input class="form-control" type="email" name="email" placeholder="example@gmail.com"><br><br></div>
                <div class="form-group">
                <label for="name">Pasword:</label>
               <input class="form-control" type="password" name="password" placeholder="mtkalo123"><br><br></div>
               <div class="form-group">
               <button class="btn  btn-block btn-secondary " style="text-size:4px" type="submit">Login</button>
               </div>
               <div class="form-group">
                <a  class="form-control"  href="/register" style="text-decoration:none;font-size:12px;">create account</a>
               </div>
               <div class="form-group">
                <a  class="form-control"   href="/password" style="text-decoration:none;font-size:12px;">Forgot password</a><br><br>
               </div>
                
            </form>
        </center>
       
        </div>
    </div>




    
</body>
</html>
@stop