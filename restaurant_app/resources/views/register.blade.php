
@extends('layout')
@section('content')
<!DOCTYPE html>

    

<div class="container align-items-center mt-5">
    <div class="shadow " style="width:500px; height:380px;margin-left:20%" >
        <h3 class="text-center text-muted text-lead">SignUp</h3>
        <center>
        <form action="/register"  method="POST" id="form_2" class="p-2 m-2 bg-light "style="margin-bottom:10px;" >
            @csrf
            <label for="name">Full Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name" placeholder="John Wiyaki"><br><br>
            <label for="phone">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="phone" placeholder="e.g +2547000000"><br><br>
            <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
            <input type="email" name="email" placeholder="example@gmail.com"><br><br>
            <label for="name">Pasword:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password" placeholder="mtkalo123"><br><br>
            <label for="password">Confirm Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="Confirm" placeholder="mtkalo123"><br><br>
           <div class="ps-2 ms-2 "> <a href="/login" style="text-decoration:none;font-size:12px;">Already registered?&nbsp;Login</a>&nbsp;&nbsp;
            <button class="btn btn-secondary " style="width:70px;height:35px; text-size:4px" type="submit">SignUp</button></div>


        </form>
    </center>
   
    </div>
</div>
@stop