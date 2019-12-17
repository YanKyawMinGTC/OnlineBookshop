<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);

  $id=$_GET['id'];
  // $sql = "SELECT * WHERE id=$id";
  $result= mysqli_query($conn,"SELECT * FROM category WHERE id=$id");
  $row = mysqli_fetch_assoc($result);

}else{
  die("file doesn't exit!!!");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Category</title>
  <style>
  form label{
    display:block;
margin-top: 8px;
  }
</style>
</head>

<body>
<form action="cat-update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'] ?>"> 

<label for="name"><?php echo  $row['name'] ?></label>
  <input type="text" id="name" name="name">

  <label for="remark"><?php echo  $row['remark'] ?></label>
  <textarea name="remark" id="remark" cols="30" rows="10"></textarea>
  <input type="submit" value="Update Category">
</form>
</body>
</html>