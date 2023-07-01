
<html>
    <head>
        <title>BiWaMi Restaurant </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       
    </head>
        <body style="background-color:rgba(197, 170, 170, 0.188)">
            <header>
         <div class="">

          <nav class="navbar bg-light border-bottom border-bottom-light navbar-scroll " data-bs-theme="light" style="height:2.5em; padding-top:0%">
            <ul class="navbar list-group-horizontal-lg  ">
           <a href=""> <i class="fa-brands fa-facebook"></i></a>&nbsp;&nbsp;
           <a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;
           <a href=""><i class="fa-brands fa-square-instagram"></i></a>&nbsp;&nbsp;
           <a href=""><i class="fa-brands fa-youtube"></i></a>&nbsp;&nbsp;
          <a href=""> <i class="fa-brands fa-telegram"></i></a>
          </ul>&nbsp;&nbsp;
          <a class="navbar-brand" href="#" style="text-size:1.5em ;top:1.0em"><span class="lead">BiWaMi Restaurant </span> </a>&nbsp;&nbsp;&nbsp;&nbsp;
         <span><a href="/register" id="register"   style="text-decoration:none;font-size:12px;text-color:rgba(129, 9, 9, 0.188)">Sign up</a>&nbsp;
        
          
          <a href="/login" id="login" style="text-decoration:none;font-size:12px;">Login</a></span> 
         
         
            <a class="navbar-brand " href="#" >
              <img src="restaurant_app\assets\breakfast\break2.jpg" alt="logo" width="20px" height="5px">
            </a>
         
          </nav>
          
          <nav class="navbar  navbar-expand-sm bg-light" style="height: 2.5em;">
            <a href="#intro" class="brand-navbar">
               
            </a>
            <!-- Toggle button for mobile navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="navbar collapse navbar-collapse justify-content-end text-align-center ">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">                  
                    <ul class="navbar-nav me-auto mb-2 ms-5 ps-5 mb-lg-0  ">
                        
                        <li class="nav-item" >
                            <a class="nav-link active tab-pane"  aria-current="page" href="/">Home</a>
                        </li>&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services </a>
                        </li>
                        
                        <li class="nav-item d-none d-md-inline">
                            <a class="nav-link" href="/order">Order </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success mt-3 pt-1" type="submit" style="height:30px">Search</button>
                    </form>
                </div>
            </div>
            
        </nav>
      </div>
    </header>
      <div >
        @yield('content')
    </div><br><br>
     <div class="container-fluid bg-dark">
      <div class="footer text-white pt-5 " style="height: 30%">
        <p class="text-center  ">&copy; 2023. All Rights Reserved</p>
        
      </div>
   </div>
          
       
       
          
          
          
         
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
          <script src="resources/js/app.js"></script>
        </body>
</html>