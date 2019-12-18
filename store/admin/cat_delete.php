<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);

  $id=$_GET['id'];
  $sql="DELETE FROM category WHERE id= $id";
  mysqli_query($conn, $sql);
  header("location: cat_list.php");
}else{
  die("file doesn't exit!!!");
  }
?> 