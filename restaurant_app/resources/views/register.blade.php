
@extends('layout')
@section('content')
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

<div class="container align-items-center mt-5">
    <div class="shadow " style="width:400px; height:400px;margin-left:20%" >
        <h3 class="text-center text-muted text-lead">SignUp</h3>
        <center>
        <form  action="register-user"  method="POST" class="p-2 m-2 bg-light"  id="form_2" style="margin-bottom:10px;" >
            @if (Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
           @endif

            @csrf
            <div class="form-group">
            <label for="name">Full Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name" placeholder="John Wiyaki" value="{{old('name')}}" >
            <span class="text-danger">@error('name'){{$message}}@enderror</span>   
            
        </div><br>
            <div class="form-group">
            <label for="phone">Contact:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input   type="text" name="contact" placeholder="e.g +2547000000" value="{{old('contact')}}"><br><br>
            <span class="text-danger">@error('contact'){{$message}}@enderror</span>  
        </div>
           
            <div class="form-group">
            <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
            <input  type="email" name="email" placeholder="example@gmail.com" value="{{old('email')}}"><br><br>
            <span class="text-danger">@error('email'){{$message}}@enderror</span>  
        </div>
            <div class="form-group">
            <label for="password">Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="password" name="password" placeholder="mtkalo123" value="{{old('password')}}"><br><br>
           <span class="text-danger">@error('password'){{$message}}@enderror</span>  
        </div>
           <div class="form-group">
           <label for="password">Confirm Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;
           <input  type="password" name="confirm" placeholder="mtkalo123" value="{{old('confirm')}}"><br><br>
           <span class="text-danger">@error('confirm'){{$message}}@enderror</span>  
        </div>
            <div class="form-group">
            <button class="btn  btn-block btn-secondary " style="text-size:4px" type="submit">SignUp</button>
            </div>
           <div class="form-group ps-2 ms-2 ">
           <a href="/login" style="text-decoration:none;font-size:12px;">Already registered?&nbsp;Login</a>&nbsp;&nbsp;</div>
         
           

        </form>
    </center>
   
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop