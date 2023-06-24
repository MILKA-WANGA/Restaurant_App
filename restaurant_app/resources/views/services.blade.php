
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
                          
                           <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">1000 </span>&nbsp;ksh.50</p>
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
            <div class="col-3">
                <div class="card">
                    <p class="text-muted text-center">Snacks and beverages</p>
                   <img src="{{URL("storage\assets\breakfast\break4.jpg")}}" alt="Image" >
                  
                   <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">250 </span>&nbsp;ksh.50</p>
                </div>
                </div>
            <div class="col-3">
            <div class="card">
                <p class="text-muted text-center">Activities</p>
               <img src="{{URL("storage\assets\activities\acting.jpg")}}" alt="Image" >
               <p class=" lead text-muted text-center">ksh.<span class="text-decoration-line-through">150</span>&nbsp;ksh.50</p>
               <a href="view"><span > More </span></a>
            </div>
            </div>
           
                <div class="col-3">
                    <div class="card">
                        <p class="text-muted text-center">Lodging</p>
                       <img src="{{URL("storage/assets/activities/resto11.webp")}}" alt="Image" >
                      
                       <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">600 </span>&nbsp;ksh.50</p>
                    </div>
                </div>
                    <div class="col-3">
                        <div class="card">
                            <p class="text-muted text-center">Meetings venue</p>
                           <img src="{{URL("storage\assets\activities\istockphoto-1248504201-612x612.jpg")}}" alt="Image"  >
                          
                           <p class="lead text-muted text-center " >ksh.<span class="text-decoration-line-through">800 </span>&nbsp;ksh.50</p>
                        </div>
                        </div>
                        

                       
    </div><br>
 <div class="container">
        <div class="bg-light" >
            <p class="lead text-muted">Renting ground for events</p>
            {{-- <img src="{{URL("storage/assets/resto/iage6.jpg")}}" alt="image"> --}}
            
        </div>
    </div>
</body>
</html>
@stop