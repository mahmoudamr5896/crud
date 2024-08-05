<?php 


    // get id from URL 
    // $_GET  --> get data from url 
    // $_POST --> get data from FORM (input name )
    $id = $_GET["userid"];
    // $username = $_GET["username"];
    // echo $username;
    require_once("config.php");
    $sql = "delete from students where userid = $id ";

    mysqli_query($conncetion, $sql);

    header("Location: index.php");
