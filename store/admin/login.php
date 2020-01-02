<?php

$uname = $_POST['uname'];
$pass = $_POST['password'];

include("confs/config.php");

$admin_table = mysqli_query($conn,"SELECT * FROM admin");
$user_table = mysqli_query($conn,"SELECT * FROM user");

while($admin = mysqli_fetch_assoc($admin_table)):

    while($user = mysqli_fetch_assoc($user_table)){

      if($uname == $admin['name'] && $pass == $admin['password']){
        session_start();
        $_SESSION["admin"] = "admin";
        if(file_exists("orders.php")){
          header("location: orders.php");
        }
      }
      elseif($uname == $user['name'] && $pass == $user['password']){
        session_start();
        $_SESSION["user"] = "user";
        if(file_exists("../index.php")){
          header("location: ../index.php");
        }
        exit();
      }
   }
  endwhile;
?>

