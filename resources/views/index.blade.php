<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>

  <div class="container" id="maincontainer">
    <div class="row">
      <div class="col-md-5 px-0">
         <img src="/images/pic.jpg" id="bg_img"/>
      </div>
      <div class="col-md-7">
       <form>
          <p class="fraunces text-center p-0 m-0 mb-1">Enterprise Resource Planning</p>
          <p class="smooch-sans text-center p-0 m-0 mb-1"> Customer Relationship Management</p>


        <!-- step-1 -->
       <div class="step-1">
        <div class="mb-2">
          <label>Enter Company name</label>
          <input class="form-control require_input"/>
        </div>
        <div class="mb-2">
          <label>Enter Company Email</label>
          <input class="form-control"/>
        </div>
        <div class="mb-2">
          <label>Enter Company Mobile</label>
          <input class="form-control"/>
        </div>
        <div class="mb-2">
          <label>Enter company Established Date</label>
          <input type="date" class="form-control require_input"/>
        </div>
        <div class="mb-2">
          <label>Enter website</label>
          <input  class="form-control"/>
        </div>
        <div class="d-flex">
         <div class="w-50 px-1">
           <input placeholder="Enter City" class="form-control mb-1 require_input"/>
           <input placeholder="Enter State" class="form-control mb-1 require_input"/>
         </div>
         <div class="w-50 px-1">
           <input placeholder="Enter Country" class="form-control mb-1 require_input"/>
           <input placeholder="Enter Pincode" class="form-control mb-1 require_input"/>
         </div>
       </div>
       <div class="text-end ">
         <button type="button" class="btn btn-dark rounded-0" id="next_1_btn">Next</button>
       </div>
     </div>


     <!-- step-2 -->
     <div class="d-none step-2">
       <div class="mb-2">
         <label>Enter Founder Name</label>
         <input class="form-control require_input"/>
       </div>
       <div class="mb-2">
         <label>Enter Founder Email</label>
         <input class="form-control require_input"/>
       </div>
       <div class="mb-2">
         <label>Enter Founder Mobile</label>
         <input class="form-control require_input"/>
       </div>
       <div class="mb-2">
         <label>Facebook Page</label>
         <input class="form-control"/>
       </div>
       <div class="mb-2">
         <label>Twitter Page</label>
         <input class="form-control"/>
       </div>
       <div class="d-flex justify-content-between">
         <button type="button" class="btn btn-danger rounded-0" id="prev_2_btn">Prev</button>
         <button type="button" class="btn btn-dark rounded-0" id="next_2_btn">Next</button>
       </div>
     </div>

    <!-- step-3 -->
    <div class="d-none step-3">
      <div class="mb-2">
        <label>Enter Whatsapp Number</label>
        <input class="form-control require_input"/>
      </div>
      <div class="mb-2">
        <label>Select Category</label>
        <select class="form-control">
         <option>Education</option>
         <option>Software</option>
         <option>Hardware</option>
       </select>
      </div>
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-danger" id="prev_3_btn">Prev</button>
        <button type="button" class="btn btn-dark">Submit</button>
      </div>
    </div>

      </form>
      </div>

    </div>

  </div>
  <script src="/js/index.js"></script>
  </body>
</html>
