<?php

// connect database --> get data from table  
    require_once("config.php"); // connection database 
    $sql = "select * from students";
                //  connection, query 
    $result = mysqli_query($conncetion, $sql); // data about table
    // $data = mysqli_fetch_array($result); // data in the table 
    // print_r($data);
    // while($data = mysqli_fetch_array($result)){
    //     print_r($data);
    // }
    //  
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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">PHP CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Create New User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
    <!-- <a href="create.php" class='btn btn-primary'> Create User </a> -->
        <h1 class="text-center text-primary">List Of Users</h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <tr class='table-dark'>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Delete User</th>
                <th>Edit User</th>
            </tr>
            <?php 
                while($usersInfo = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".  $usersInfo["name"]  ."</td>";
                echo "<td>".  $usersInfo["email"]  ."</td>";
                echo "<td>".  $usersInfo["phone"]  ."</td>";
                echo "<td> <a class='p-3' href='delete.php?userid=$usersInfo[userid]'>
                <i class='bi bi-trash3 text-danger'></i> </a> </td>";
                 // send id in the url 
                echo "<td> <a class='p-3' href='edit.php?userid=$usersInfo[userid]'> <i class='bi bi-pencil-square text-warning'></i> </a> </td>";
                echo "</tr>";
            }
            ?>

        </table>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et doloremque hic ex rerum cupiditate, quia sunt saepe repellat ut ea libero eius illum doloribus qui praesentium totam harum illo iusto.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor totam praesentium libero? Blanditiis doloribus maiores ducimus nisi possimus quia autem quis vero tempore atque voluptates consectetur, necessitatibus voluptatum est at.
        </p>
    </div>
</body>
</html>