<?php 
    require_once('config.php');
    if(isset($_POST["btn"])){
        $id  = $_GET["userid"];
        $name = $_POST["name"]; // ahmed
        $email = $_POST["email"]; // ahmed@gmail.com
        $phone = $_POST["phone"]; // 123

        $sql = "update students set name = '$name', email = '$email', phone = $phone where id = $id";
        mysqli_query($conncetion, $sql);
        header("Location: index.php");
    }

    // get data from 
    
    $id  = $_GET["userid"]; // get data from url 
    $sql = "select * from students where id = $id"; // only one row
    $result = mysqli_query($conncetion, $sql);
    $info = mysqli_fetch_array($result);
    // print_r($info);


?> 


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
            <h1 class="text-center text-primary">Edit <?php echo "<span class='text-warning'>".$info['name']."</span>" ?></h1>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input  value="<?php echo $info['name'] ?>" type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input  value="<?php echo $info['email'] ?>" type="text" class="form-control" name='email'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name='phone'  value="<?php echo $info['phone'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="btn">Edit</button>
            </form>
        </form> 
    </div>

</body>
</html>

