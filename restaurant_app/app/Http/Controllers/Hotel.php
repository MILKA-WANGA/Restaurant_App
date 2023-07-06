<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Hash;




class Hotel extends Controller
{

    function index()
    {
        return view("Home");
    }
    function register()
    {
      return view('register');
     
      
      
      

   
    // //check if registererd or not
    
    }
  
    
    
    
    function registerUser(Request $req)
    {
        //Validate data
        // $req->validate([
        //   'name'=>'required',
        //   'contact'=>'required',
        //   'email'=>'required |email|unique:members ',
        //   'password'=>'required | min:5 | max:12 ',
        //   'comfirm'=>'required | min:5 | max:12 '
        //   ]);
         
       
      $data=new Member;
      $data->name=$req->input('name');
      $data->contact=$req->input('contact');
      $data->email=$req->input('email');
      $data->password=$req->input('password');
      $data->created_at;
      $data->updated_at;        
       $result=$data->save();    

 
     //Check if data is posted in database
      if($result)
      {
        return back()->with('success', 'You have Registered Successful');
      }
      else{
        return back()->with('fail','Registration failed please try again');
      }  
     
      
    }
    public function login()
    {
      return view('login');
    }
    public function loginUser(Request $req)
    {
      $data=Member::where('email' ,'=', $req->email)->first();
      if($data)
      {
        //check password
        if(check($req->password, $data->password))
        {
          $req->session()->put('loginId',$data->id);
          return redirect('dashboard');
        }
        else{
          return back()->with('fail','Email and password does not match .Please try again');
        } 
      } 
       else{
          return back()->with('fail','Login failed Please try again');
        }  

      

    }

  }
//     {
//         $data=Restaurant::all();
//         return view('list',["data"=>$data]);
//     }
//    
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
 
   

    

