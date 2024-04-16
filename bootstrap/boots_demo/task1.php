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

<nav class="navbar navbar-dark bg-dark fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NiceAdmin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dashboard</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>

    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        USER
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">LOGIN</a></li>
        <li><a class="dropdown-item" href="#">SIGN IN</a></li>
        <li><a class="dropdown-item" href="#">LOG OUT</a></li>
      </ul>
    </div>

  </div>
</nav>
<br>

<h3 style="margin-top:80px;">Dashboard</h3>
<h5>Home / Dashboard</h5>
<div class="container" style="margin-top:50px;">
  <div class="row">
    <div class="col-lg-8">
      <div class="container ">
        <div class="row">
          <div class="col-md-6">
            <p>
              <h5>Sales / Today</h5>
              <h1>145</h1>
              12% increase
            </p>
          </div>
          <div class="col-md-6 ">
            <p>
              <h5>Revenue / This Month</h5>
              <h1>$ 326.4</h1>
              8% increase
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <p>
              <h5>Customers / This Year</h5>
              <h1>1244</h1>
              12% increase
            </p>
          </div>
          <!-- <div class="col-md-6">
            <p>
              <h5>Customers / This Year</h5>
              <h1>1244</h1>
              12% increase
            </p>
          </div> -->
        </div>
      </div>
    </div>
  
  <div class="col-md-4">
    <div class="container"> 
        <p>
          This is the content Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam expedita 
          repudiandae quasi quia perferendis ad, reprehenderit atque ut laborum harum delectus autem 
          suscipit est voluptates, quos et eligendi obcaecati nihil!
           inside the last container.l This is the content Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam expedita 
          repudiandae quasi quia perferendis ad, reprehenderit atque ut laborum harum delectus autem 
          suscipit est voluptates, quos et eligendi obcaecati nihil!
           inside the last container.l This is the content Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam expedita 
          repudiandae quasi quia perferendis ad, reprehenderit atque ut laborum harum delectus autem 
          suscipit est voluptates, quos et eligendi obcaecati nihil!
           inside the last container.l
        </p>
      </div>
    </div>

  </div>
</div>
</body>
</html>
