<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Book</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
  .container {
    width: 500px;
margin: 0 auto;  
}
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
<h1>Update Book</h1>
<?php
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $id=$_GET['id'];
  $result= mysqli_query($conn,"SELECT * FROM books WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
}else{
  die("file doesn't exit!!!");
  }
?>
<form action="book_update.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
<div class="form-group ">
<label for="name">New Title</label>
  <input type="text" name="title" id="title" class="form-control" value="<?php echo $row['title'] ?>">
</div>

<div class="form-group ">
  <label for="author">Book Author</label>
  <input type="text" name="author" id="author" class="form-control" value="<?php echo $row['author'] ?>">
</div>

<div class="form-group ">
  <label for="summary">Summary</label>
  <textarea name="summary" id="summary" class="form-control"><?php echo $row['summary'] ?></textarea>
  </div>

  <div class="form-group ">
  <label for="price">Price</label>
  <input type="text" name="price" id="price" class="form-control" value="<?php echo $row['price'] ?>">
  </div>

  <div class="form-group ">
  <label for="category">Category</label>
      <select name="category_id" id="cate">
          <option value="0">==Choose==</option>
                      <?php
                      $category=mysqli_query($conn,"SELECT id,name FROM category");
                      while ($cat=mysqli_fetch_assoc($category)):?>
          <option value="<?php $cat['id'] ?>" 
                      <?php
                        if($cat["id"]==$row["id"])echo "selected"
                      ?>>
                      <?php echo $cat['name'] ?>
          </option>
                      <?php endwhile; ?>
    </select>
  </div>
  <div class="form-group">
  <div style="width: 300px;margin:0 auto;">
  <img src="covers/<?php echo $row['cover'] ?>" alt="" style="width:100%;">
  </div>
 
  <label for="cover">Change Cover</label>
 <input type="file" name="cover" id="cover" class="mb-3" >
  </div>
<div class="input-group">
  <input type="submit" value="Add Book" class="btn btn-primary mb-2 mr-3">
  <a href="book_list.php" class="btn btn-primary mb-2">Back to booklist</a>
  </div>
</form>
</div>

</body>
</html>