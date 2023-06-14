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
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td >{{ $item->email }}</td>
                <td >{{ $item->password }}</td>
                <td >{{ $item->Created_at }}</td>
                <td >{{ $item->Updated_at }}</td>
                <th>
                  <a href="/delete/{item->id}"><i class="fa-solid fa-trash-can"></i></a>
                  <a href="/edit/{item->id}"><i class="fa-solid fa-pen"></i></a>
                </th>
            </tr>
        </tbody>
    @endforeach
    
    </table>
