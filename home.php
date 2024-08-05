<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file  booststrap.min.css or bootstrap.css --> 
      <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css"> 
      <!-- javascript      -->
      <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
      <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
          <a class="nav-link active" aria-current="page" href="create.php">Create New User</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div id="slider" class="carousel slide carousel-fade">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./images/1.jpg" class="d-block w-100 " height="350px" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hello WORLD</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="./images/2.jpeg" class="d-block w-100  " height="350px" alt="...">
        </div>
        <div class="carousel-item ">
        <img src="./images/3.jpeg" class="d-block w-100  " height="350px" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <p class="alert alert-danger">hello world</p>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="row p-5">
        <div class="text-danger col-lg-3  col-md-5 col-sm-12">
            <img  src="./images/1.jpg" alt="" class="w-100 rounded-circle">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima quidem illum id eaque excepturi, accusantium inventore laudantium enim, ipsum cupiditate repudiandae assumenda. Veniam eius consequuntur, facere accusamus cupiditate qui?
        </div>

        <div class='text-primary col-lg-3  col-md-5 col-sm-12 offset-md-2 offset-lg-0'>
        <img  src="./images/3.jpeg" alt=""  class="w-100 rounded-pill">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima quidem illum id eaque excepturi, accusantium inventore laudantium enim, ipsum cupiditate repudiandae assumenda. Veniam eius consequuntur, facere accusamus cupiditate qui?
        </div>

        <div class="text-warning col-lg-3  col-md-5 col-sm-12">
        <img  src="./images/1.jpg" alt=""  class="w-100 border border-danger border-5 rounded-4">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima quidem illum id eaque excepturi, accusantium inventore laudantium enim, ipsum cupiditate repudiandae assumenda. Veniam eius consequuntur, facere accusamus cupiditate qui?
        </div>

        <div class="text-info col-lg-3  col-md-5 col-sm-12 offset-md-2 offset-lg-0">
        <img  src="./images/2.jpeg" alt=""  class="w-100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima quidem illum id eaque excepturi, accusantium inventore laudantium enim, ipsum cupiditate repudiandae assumenda. Veniam eius consequuntur, facere accusamus cupiditate qui?
        </div>
    </div>
</div>

</body> 
</html> 