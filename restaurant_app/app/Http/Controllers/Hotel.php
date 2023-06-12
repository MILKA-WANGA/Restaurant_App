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
        return view('list',["list"=>$data]);
    }
}
