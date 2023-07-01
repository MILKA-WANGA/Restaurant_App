
@extends('layout')
@section('content')
<!DOCTYPE html>

    

<div class="container align-items-center mt-5">
    <div class="shadow " style="width:500px; height:380px;margin-left:20%" >
        <h3 class="text-center text-muted text-lead">SignUp</h3>
        <center>
        <form class="p-2 m-2 bg-light  " action="/register"  method="POST" id="form_2" style="margin-bottom:10px;" >
            @csrf
            <div class="form-group">
            <label for="name">Full Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="name" placeholder="John Wiyaki" value="{{old('name')}}"><br><br>
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                
            
        </div>
            <div class="form-group">
            <label for="phone">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-control"  type="text" name="phone" placeholder="e.g +2547000000"><br><br></div>
            <div class="form-group">
            <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
            <input class="form-control" type="email" name="email" placeholder="example@gmail.com"><br><br></div>
            <div class="form-group">
            <label for="password">Pasword:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input class="form-control" type="password" name="password" placeholder="mtkalo123"><br><br></div>
           <div class="form-group">
           <label for="password">Confirm Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;
           <input class="form-control" type="password" name="Confirm" placeholder="mtkalo123"><br><br></div>
            <div class="form-group">
            <button class="btn  btn-block btn-secondary " style="text-size:4px" type="submit">SignUp</button></div>
            </div>
           <div class="form-group ps-2 ms-2 ">
           <a href="/login" style="text-decoration:none;font-size:12px;">Already registered?&nbsp;Login</a>&nbsp;&nbsp;
         
           

        </form>
    </center>
   
    </div>
</div>
@stop