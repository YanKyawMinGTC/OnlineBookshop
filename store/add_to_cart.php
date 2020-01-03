
<?php
  session_start();
$fileconfig="admin/confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $id = $_GET['id'];
  $_SESSION['cart'][$id]++;
  header("location: index.php");
}else{
  die("file doesn't exit!!!");
  }
?> 