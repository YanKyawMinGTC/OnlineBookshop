<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $id=$_GET['id'];
  var_dump($id);
  $sql="DELETE FROM books WHERE id = $id";
  mysqli_query($conn, $sql);
  header("location: book_list.php");
}else{
  die("file doesn't exit!!!");
  }
?> 