<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-expand-md navbar-dark bg-primary fixed-top"> 
        <div class="container-xxl">
            <a href="#" class="navbar-brand"><span class="fw-bold text-info"></span>SCOTO SYSTEC PVT LTD</a>
                                                                                    <!-- this is the button id -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav"
        aria-expanded="false" aria-label="Toggle-navigation">
    <span class="navbar-toggler-icon"></span></button>

    <!-- navbar links                                                       call the button id -->
       <div class="collapse navbar-collapse justify-content-end  align-center" id="main-nav">
        <div class="d-flex flex-row"> <!-- Wrap ul inside a div and apply flex classes -->
            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ORDERS</a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#">BUY NOW</a> <!-- Corrected typo in "BUY BNOW" to "BUY NOW" -->
                </li>
                <li class="nav-item ms-2 d-none d-md-inline">
                    <a class="btn btn-secondary" href="#">BUY NOW</a>
                </li>
            </ul>
        </div>
       </div>
    </div>
   </div>
   

<div class="container bg-info"  style="margin-top:90px; ">
    <div class="row">
        <!-- <div class="col-md-12"> -->
            <h1 class="text-center">Top Indian companies</h1>
            <P class="text-center mt-3">This is a list of notable companies in the information technology sector based in India. Top Indian companies are listed in descending order of their market capitalization,[1] and other companies are listed alphabetically, grouped by the cities in which they are headquartered. </P>
        </div>
    </div>
</div>

<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-12 col-md-4">

            <div class="card mb-4 " style="width: 20rem;">
               <img  height="300" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT51HFjk-ELaKT8y-7TYZu0is8CPb6kuhQIhQ&s" alt="Scoto company"
                  class="card-img-top">
               <div class="card-body">
                   <h5 class="cart-title">SCOTO SYSTEC PVT LTD</h5><br>
                   <!-- <h6 class="card-subtitle text-muted mb-2">Web Design</h6> -->
                   <span class="badge  bg-primary mb-2">Web Design</span>
                   <span class="badge bg-success">Web development</span>
                   <p class="card-text">SCOTO provide full-cycle services in the areas of software development, web-based enterpriseOur domain expertise and technological ability pan a very broad spectrum.</p>
                    <a href="#" class="btn btn-primary btn-block">Get In Touch</a>
                </div>
               <div class="card-footer">
                  <small class="text-muted">More Information :Our WEBSITE</small>
               </div>
            </div>
        </div>

      <div class="col-12 col-md-4">
            <div class="card mb-4" style="width: 20rem;">
               <img  height="300"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/TCS_SIPCOT_Building.jpg/1024px-TCS_SIPCOT_Building.jpg" alt="Scoto company"
                  class="card-img-top">
               <div class="card-body">
                   <h5 class="cart-title text-uppercase">Tata Consultancy Services</h5><br>
                   <span class="badge  bg-danger mb-3">TCS Careers</span>
                   <span class="badge bg-success">TCS Internship Program</span>
                   <p class="card-text">TCS is here to make a difference through technology.
                             Leading the way in innovation for over 50 years, we build greater futures for businesses across multiple industries and 131 countries.</p>
                    <a href="#" class="btn btn-outline-primary ">Get In Touch</a>
                </div>
               <div class="card-footer">
                  <small class="text-muted">More Information :Our WEBSITE</small>
               </div>
        </div>
      </div>


      <div class="col-12 col-md-4">
            <div class="card mb-4" style="width: 20rem;">
               <img height="300"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-Z3GbTqw4xqiT91sMF_KlDJUdPYLI8G6xxg&s" alt="Scoto company"
                  class="card-img-top">
               <div class="card-body">
                   <h5 class="cart-title text-uppercase">Accenture</h5><br>
                   <span class="badge  bg-warning mb-3">Accenture Careers</span>
                   <span class="badge bg-success">Supply Chain Services</span>
                   <p class="card-text"> Accenture is a global professional services company that provides a wide range of services and solutions in strategy, consulting, digital, technology, and operations.</p>
                    <a href="#" class="btn btn-primary btn-block">Get In Touch</a>
                </div>
               <div class="card-footer">
                  <small class="text-muted">More Information :Our WEBSITE</small>
               </div>
        </div>
      </div>
    </div>
</div>

<div class="container  text-black mb-4 mt-2">
    <div class="row p-4">
        <div class="col-12 col-lg-6 bg-info">
        <h2 class="mt-3">Job Careers</h2>
        <form action="">
            <div class="form-group">
                <label for="name">NAME</label><br>
                <input type="text" class="form-control mb-2" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="email">EMAIL</label><br>
                <input type="email" class="form-control mb-2" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="message">MESSAGE</label><br>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-danger mt-2 mb-2">Submit</button>
        </form>
    </div></div>
</div>




</body>
</html>
