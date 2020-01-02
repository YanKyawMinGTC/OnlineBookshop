<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $name = $_POST['name'];
  $remark = $_POST['remark'];
  $sql = "INSERT INTO category (name, remark, created_date,
  modified_date) VALUES ('$name', '$remark', now(), now())";
  mysqli_query($conn, $sql);
   header("location: cat_list.php");
}else{
  die("file doesn't exit!!!");
  }
?> 