<h1>Category List</h1>
<?php

$configfile = "confs/config.php";
if(file_exists($configfile)){
  // var_dump("file exit");
  include($configfile);
  $result=mysqli_query($conn,"SELECT * FROM category");
}else{
  die("file doesn't exit!!");
}
?>
<ul>
  <?php while($row=mysqli_fetch_assoc($result)): ?>
    <li title="<?php echo $row['remark'] ?>">
    <a href="cat-delete.php?id=<?php echo $row['id'] ?>">DEL</a>
    <?php echo $row['name'] ?>
    <a href="cat-edit.php?id=<?php echo $row['id'] ?>">Update</a>
    </li>
  <?php endwhile; ?>
</ul> 
<a href="cat-new.php" class='new'>New Category</a>

<style>
*{
  color:black;}
  body{
    background:#4943cf;
  }
</style>