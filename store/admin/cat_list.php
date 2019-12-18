
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category list</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
<?php
$configfile = "confs/config.php";
if(file_exists($configfile)){
  include($configfile);
  $result=mysqli_query($conn,"SELECT * FROM category");
}else{
  die("file doesn't exit!!");
}
?>
  <div class="container">
  <h1 class="mb-5">Category list</h1>
  <ul class="list-group ">
  <?php while($row=mysqli_fetch_assoc($result)): ?>
    <li title="<?php echo $row['remark'] ?>" class="list-group-item" >
    <?php echo $row['name'] ?>
    <a href="cat_edit.php?id=<?php echo $row['id'] ?>" class  ="btn btn-secondary  ml-5">Update</a>
    <a href="cat_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">DEL</a>
    </li>
  <?php endwhile; ?>
</ul> 
<a href="cat_new.php" class='btn btn-primary'>New Category</a>
   </div>
</body>
</html>