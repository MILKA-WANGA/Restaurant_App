<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class Hotel extends Controller
{

    function index()
    {
        return view("Home");
    }
    function register()
    {

    }
//     function list()
//     {
//         $data=Restaurant::all();
//         return view('list',["data"=>$data]);
//     }
//      function  add(Request $req)
//      {
//         // return $req->input();
//         $data=new Restaurant;
//         $data->name=$req->input('name'); 
//         $data->email=$req->input('email');   
//         $data->password=$req->input('password');  
//         $data->save();
//         $data->session()->flash('status',"Data added successful");
//        return redirect('list');        

//      }
//      function edit($id)
//      {
//         $data=Restaurant::find($id);
//         return view("edit",["data"=>$data]);
        
//      }
//      function update(Request $req)
//      {
//         $data=Restaurant::find($req->id);
//         $data->name=$req->name;
//         $data->email=$req->email;
//         $result=$data->save();
//         if($result)
//         {  
        
//            echo'<script>alert("Updated successful")</script>' ;
//            return redirect('list');
//         }
//         else{
//             return "Failed to update please try again";
//         }
        
        
//      }
//      function deleteData($id)
//      {
//        $data=Restaurant::find($id);
//        $data->delete();
//        return redirect('list');

//      }
// 
 }
   

    

