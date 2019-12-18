<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Category</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
  form label{
    display:block;
margin-top: 8px;
  }
  textarea{
    width: 100%;
    height:200px;
    resize:none;
  }
</style>
</head>

<body>
<div class="container">
<?php include("confs/auth.php")?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="cat_list.php">Manage Categories</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="book_list.php">Manage Book List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php">Manage Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<h1>Update Category</h1>
<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);

  $id=$_GET['id'];
  $result= mysqli_query($conn,"SELECT * FROM category WHERE id=$id");
  $row = mysqli_fetch_assoc($result);

}else{
  die("file doesn't exit!!!");
  }
?>
<form action="cat_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>"> 
<div class="form-group">
  <label for="name"><?php echo $row['name'] ?></label>
  <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name'] ?>">
</div>
<div class="form-group">
<label for="remark"><?php echo  $row['remark'] ?></label>
  <textarea name="remark" id="remark" cols="30" rows="10" ><?php echo  $row['remark'] ?></textarea>
</div>
  
  <input type="submit" value="Update Category" class="btn btn-primary">
</form>
</div>

</body>
</html>