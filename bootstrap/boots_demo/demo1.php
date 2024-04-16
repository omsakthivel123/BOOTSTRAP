<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navbar, Sidebar, Containers</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom styles can go here */
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Another Link</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Sidebar Item 1
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Sidebar Item 2
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Sidebar Item 3
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<!-- Containers -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="container">
        <h2>Container 1</h2>
        <p>This is the content of container 1.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="container">
        <h2>Container 2</h2>
        <p>This is the content of container 2.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="container">
        <h2>Container 3</h2>
        <p>This is the content of container 3.</p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
