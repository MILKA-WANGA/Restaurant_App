
@extends('layout')
@section('contents')
    
@endsection
   
<table class="table">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
      </tr>
    </thead>
    @foreach ($data as $item)  
    <tbody>
      <tr>
        <th scope="col">{{$item->id}}</th>
        <th scope="col">{{$item->name}}</th>
        <th scope="col">{{$item->email}}</th>
        <th scope="col">{{$item->password}}</th>
        <th scope="col">{{$item->Created_at}}</th>
        <th scope="col">{{$item->Updated_at}}</th>
      </tr>
    </tbody>
    @endforeach
        
    