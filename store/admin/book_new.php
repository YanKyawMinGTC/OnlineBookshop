<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>New Book</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
  form label{
    display:block;
    margin-top: 10px;
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
<h1>New Book</h1>
<form action="book_add.php" method="POST" enctype="multipart/form-data">
<div class="form-group col-md-6">
<label for="name">Book Title</label>
  <input type="text" name="title" id="title" class="form-control">
</div>

<div class="form-group col-md-6">
  <label for="author">Book Author</label>
  <input type="text" name="author" id="author" class="form-control">
</div>

<div class="form-group col-md-6">
  <label for="summary">Summary</label>
  <textarea name="summary" id="summary" class="form-control"></textarea>
  </div>

  <div class="form-group col-md-6">
  <label for="price">Price</label>
  <input type="text" name="price" id="price" class="form-control">
  </div>

  <div class="form-group col-md-6">
  <label for="category">Category</label>
  <select name="category_id" id="category" class="form-control">
  <option value="0">== Choose ==</option>
  <?php
  $configfile = "confs/config.php";
    include($configfile);
    $catlist_get=mysqli_query($conn,"SELECT id,name FROM category");
    while($row=mysqli_fetch_assoc($catlist_get)): 
  ?>
  <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
    <?php endwhile; ?>
  </select>
  </div>
  <div class="form-group col-md-6">
  <label for="cover">Cover</label>
 <input type="file" name="cover" id="cover" class="mb-3">
  </div>
<div class="input-group">
  <input type="submit" value="Add Book" class="btn btn-primary mb-2 mr-3">
  <a href="book_list.php" class="btn btn-primary mb-2">Back to booklist</a>
  </div>
</form>
</div>

</body>
</html>