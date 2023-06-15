@extends('layout')
@section('contents')
    
@endsection

<h1>Add page</h1>
<div class="col-sm-6">
    {{-- @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
    @endif --}}
<form action="" method="POST">
   
    @csrf
    <div class="mb-3">
      <label >Name:</label>
      <input type="text" name="name">
      
    </div>
    <div>
      <input type="hidden" name="id" value="{{$data['id']}}">
    </div>
    <div class="mb-3">
        <label >Email:</label>
        <input type="email" name="email" value="{{$data['name']}}">
        
      </div>
      <div class="mb-3">
        <label >Password:</label>
        <input type="password" name="password" value="{{$data['password']}}">
        
      </div>
  <div><button type="submit" class="btn btn-primary align-centre">Submit</button></div>
    
  </form>
  </div>