
@extends('layout')
@section('contents')
    
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant App</title>
</head>
<body>
    <h1>List Page</h1>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Created at</td>
            <td>Updated at</td>
        </tr>
        @foreach ($data as $item)       
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->Created_at}}</td>
            <td>{{$item->Updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>


