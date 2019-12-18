<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
  .container{
    margin: 0 auto;
  }
  </style>
</head>
<body>
  <div class="container pt-5">
  <h1 class="text-primary">Book List</h1>
  <?php
  $configfile = "confs/config.php";
    include($configfile);
    $result = mysqli_query($conn, "
    SELECT books.*, category.name
    FROM books LEFT JOIN category
    ON books.category_id = category.id
    ORDER BY books.created_date DESC
    ");
     ?>
  <?php while($row_book=mysqli_fetch_assoc($result)): ?>
   <div class="card md-3 mb-5">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="covers/<?php echo $row_book['cover']?>" alt="" style="height:200px">
    </div>
    <div class="col-md-8 pl-5">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row_book['title'] ?></h5>
        <p><i><?php echo $row_book['author']?></i></p>
        <p><small>(in <?php echo $row_book['name']?>)</small></p>
        <p><span>$<?php echo $row_book['price'] ?></span></p>
        <p class="card-text"><?php echo $row_book['summary']?></p>
      </div>
     <a href="book_del.php?id=<?php echo $row_book['id']?>" class="btn btn-primary mb-3">Delete</a>
     <a href="book_edit.php?id=<?php echo $row_book['id']?>" class="btn btn-primary mb-3">Update</a>
    </div>
  </div>
</div>
  <?php endwhile; ?>
  <a href="book_new.php " class="btn btn-primary">New Book</a>
  </div>
 
</body>
</html>