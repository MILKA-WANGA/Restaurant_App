<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Foundation\Validation;




class Hotel extends Controller
{

    function index()
    {
        return view("Home");
    }
    function register(Request $req)
    {
      //return $req->input();
      $member=new Member;
      $member->name=$req->input('name');
      $member->contact=$req->input('phone');
      $member->email=$req->input('email');
      $member->password=$req->input('password');
      $member->created_at;
      $member->updated_at;
      $member->save();
      //Validate data
      
      $req->validate([
        'name'=>'required',
        'phone'=>'required ',
        'email'=>'required || email || unique',
        'password'=>'required || min:8 || max:12'

      ]);


      //return "Registrartion Succesful";

    //check if registererd or not
    
    }      
    
    
    function login()
    {
      
    }
//     {
//         $data=Restaurant::all();
//         return view('list',["data"=>$data]);
//     }
//      function  add(Request $req)
//      {
//         return $req->input();
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
   

    

