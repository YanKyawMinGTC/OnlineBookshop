<?php
session_start();
$uname = $_POST['uname'];
$pass = $_POST['password'];
if($uname=="admin" and $pass=="123456"){
  $_SESSION['auth']=true;
  if(file_exists("book_list.php")){
    var_dump(file_exists("book_list.php"));
    header("location: book_list.php");
    exit();
  }
}else{
  header("location: index.php");
}
?>