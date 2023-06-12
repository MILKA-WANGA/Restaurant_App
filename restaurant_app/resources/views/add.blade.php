@extends('layout')
@section('contents')
    
@endsection

<h1>Add page</h1>
<div class="col-sm-6">
<form>
    <div class="for-group">
      <label >Name:</label>
      <input type="text" name="name">
      
    </div>
    <div class="for-group">
        <label >Email:</label>
        <input type="email" name="email">
        
      </div>
      <div class="for-group">
        <label >Password:</label>
        <input type="password" name="password">
        
      </div>
  <div><button type="submit" class="btn btn-primary align-centre">Submit</button></div>
    
  </form>
  </div>