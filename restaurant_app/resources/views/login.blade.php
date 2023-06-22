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
    <div class="container">
        <div class="shadow">
            <form action="" class="p-2 m-2 bg-light">
                <label for="email">Email:</label><br>
                <input type="email" name="email" placeholder="example@gmail.com">
                <label for="password">password</label>
                <input type="password" name="password" placeholder="mtkalo123">
            </form>
        </div>
    </div>
</body>
</html>
@stop