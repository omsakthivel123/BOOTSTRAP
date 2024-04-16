<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Bundle (Bootstrap JS + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="30" class="d-inline-block align-top">
                Bootstrap Tamil
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="task6.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="task6.php" class="nav-link">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">HELP</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                            <li><a class="dropdown-item" href="#">GetUp</a></li>
                            <li><a class="dropdown-item" href="#">Text</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group ">
                <li class="list-group-item d-flex justify-content-between align-items-center">hi
                    <span class="badge badge-warning badge-pill">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">hi
                    <span class="badge badge-primary badge-pill">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">hi
                    <span class="badge badge-primary badge-pill">5</span>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT51HFjk-ELaKT8y-7TYZu0is8CPb6kuhQIhQ&s" alt="scoto" class="img-fluid" style="height: 200px; width: 200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title text-danger">SCOTO SYSTEC PVT lTD</h4>
                            <span class="badge bg-success mb-2">Web Design</span>
                            <span class="badge bg-warning mb-2">Android Develop</span>
                            <p class="card-text">Scoto provides full-cycle services in the areas of software development, web-based enterprise solutions, web application, and portal development. Combining our solid business domain experience, technical expertise, profound knowledge of latest industry trends and quality-driven delivery model, we deliver solutions that go beyond meeting customer expectations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
