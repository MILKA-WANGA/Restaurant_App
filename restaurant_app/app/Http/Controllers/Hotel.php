<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class Hotel extends Controller
{
    //
    function index()
    {
        return view("Home");
    }
    function list()
    {
        $data=Restaurant::all();
        return view('list',["data"=>$data]);
    }
     function  add(Request $req)
     {
        // return $req->input();
        $data=new Restaurant;
        $data->name=$req->input('name'); 
        $data->email=$req->input('email');   
        $data->password=$req->input('password');  
        $data->save();
       // $data->session()->flash('status',"Data added successful");
        

     }
}
