
<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $id=$_POST['id'];
  $name=$_POST['name'];
  $remark=$_POST['remark'];
  var_dump($_POST['id']);
  var_dump($_POST['name']);
  var_dump($_POST['remark']);
  $sql="UPDATE category SET name='$name',remark='$remark',modified_date=now() WHERE id=$id";
  mysqli_query($conn,$sql);

  header("location: cat_list.php");
}else{
  var_dump("config file doesn't not exit");
}

  ?>

