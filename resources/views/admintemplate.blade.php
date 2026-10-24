<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield("my-title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/admintemplate.css">
    @yield("my-css")
  </head>
  <body>

   <div class="container-fluid" id="main_container">
     <div class="row">

       <div class="col-md-3" id="left">
         <div class="text-center pt-3">
         <span class="material-icons">face</span>
         <h3>Hello admin</h3>
         <p class="d-flex px-2 align-items-center justify-content-center">
           <span class="material-icons">mail</span>
           <span>dhote630@gmail.com</span>
         </p>
       <hr/>
       </div>
       </div>

        <div class="col-md-9 px-0">
          <div class="d-flex justify-content-between p-2" id="navigation">
            <button type="button" class="btn btn-sm">
              <span class="material-icons">menu</span>
            </button>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">about</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Jobs</a>
                </li>
                <button type="button" class="btn btn-sm">
                  <span class="material-icons">exit_to_app</span>
                </button>
              </ul>
          </div>

        <div class="p-4">
          <div class="bg-white p-4">
             <h3>Welcome To Dashboard</h3>
          </div>
        </div>

        </div>

     </div>
   </div>

  @yield("my-js")
  </body>
</html>
