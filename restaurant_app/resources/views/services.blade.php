
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
</head>
<body>
    <div class="lead text-black text-center"> <h1 >Services</h1></div>
    <div class="container-fluid" >
            <div class="row ms-2">
            <div class="col-3">
            <div class="card">
                <p class="display-6 fs-5 text-center">Breakfast</p>
               <img src="{{URL("storage/assets/breakfast/braek7.jpg")}}" alt="Image" style="border-radius: 50px">
              
               <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">120 </span>&nbsp;ksh.30</p>
               <a href="view"><span >view</span></a>
            </div>
            </div>
           
                <div class="col-3">
                    <div class="card">
                        <p class="display-6 fs-5 text-center">Stew</p>
                       <img src="{{URL("storage/assets/food/beef.jpeg")}}" alt="Image" style="border-radius: 50px">
                      
                       <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">600 </span>&nbsp;ksh.50</p>
                    </div>
                </div>
                    <div class="col-3">
                        <div class="card">
                            <p class="display-6 fs-5 text-center">Fish</p>
                           <img src="{{URL("storage/assets/food/food13.webp")}}" alt="Image" style="border-radius: 50px">
                          
                           <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">800 </span>&nbsp;ksh.50</p>
                        </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <p class="display-6 fs-5 text-center">Chapati</p>
                               <img src="{{URL("storage/assets/food/food2.jpg")}}" alt="Image" style="border-radius: 50px" height="95px">
                              
                               <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">800 </span>&nbsp;ksh.50</p>
                            </div>
                     </div>
                       
        
    </div><br><br>
    <div class="container-fluid">
        <div class="row ms-2">
            <div class="col-4">
            <div class="card">
                <p class="display-6 fs-5 text-center">Breakfast</p>
               <img src="{{URL("storage/assets/breakfast/braek7.jpg")}}" alt="Image" style="border-radius: 50px">
              
               <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">120 </span>&nbsp;ksh.30</p>
               <a href="view"><span >view</span></a>
            </div>
            </div>
           
                <div class="col-4">
                    <div class="card">
                        <p class="display-6 fs-5 text-center">Stew</p>
                       <img src="{{URL("storage/assets/food/beef.jpeg")}}" alt="Image" style="border-radius: 50px">
                      
                       <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">600 </span>&nbsp;ksh.50</p>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="card">
                            <p class="display-6 fs-5 text-center">Fish</p>
                           <img src="{{URL("storage/assets/food/food13.webp")}}" alt="Image" style="border-radius: 50px" >
                          
                           <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">800 </span>&nbsp;ksh.50</p>
                        </div>
                        </div>
                       
    </div>
</body>
</html>
@stop