<div class="container">
    @yield('contents')
</div>
<html>
    <head>
        <title>Restaurant App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       
    </head>
        <body>
          
          <nav class="navbar bg-light border-bottom border-bottom-dark " data-bs-theme="light">
            <!-- Navbar content -->
            
            <ul class="navbar-nav me-auto mb-0 mb-lg-0 color list-group-horizontal">
              <li class="nav-item  color-red">
               <a href=""><i class="fa-brands fa-facebook ps-2"></i></a>
              </li>
              <li class="nav-item">
                <a href=""><i class="fa-brands fa-twitter "></i></a>
              </li>
              <li class="nav-item">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a href=""><i class="fa-brands fa-youtube"></i></a>
              </li>
            </ul>
            
          </nav>
         
          
          <nav class="navbar navbar-expand-md bg-primary " data-bs-theme="dark" >
            <a href="#" class="brand-navbar">
                <div class=" fw-bold text-secondary" data-bs-placement="top" title="TechBiWaMi"class="tt">
                    <span  class=".tt"><img src="..\restaurant_app\assets\breakfast\break2.jpg" alt="" srcset="" width="50" height="50"
                        class="rounded border border-danger ms-5">
                    </span>
                
                </div>
            </a>
            <!-- Toggle button for mobile navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="navbar collapse navbar-collapse justify-content-center text-align-center ">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand " href="#">Resto</a>
                   <ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Food</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add</a>
        </li>
      </ul>
                </div>
            </div>
            
        </nav>
       
          
          
          
         
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
      </body>
</html>