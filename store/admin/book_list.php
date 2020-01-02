<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <style>
  .container{
    margin: 0 auto;
  }
  textarea{
    width: 100%;
    height:200px;
    resize:none;
  }
  i{
    margin-right: 30px;
    cursor:pointer;
  }
  </style>
</head>
<body>
<?php include("confs/auth.php"); ?>
  <div class="container pt-5">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="cat_list.php">Manage Categories</a>
    </li>
      <li class="nav-item active">
        <a class="navbar-brand" href="book_list.php">Manage Book List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php">Manage Order</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Logout</a>
      </li>
      </ul>
    </div>
  </nav>
  <h1 class="text-primary">Book List</h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, similique assumenda quasi magnam eum numquam fugit fugiat facere vero. Odit consequatur deleniti dolorem illo magnam eveniet facere, vero a modi?</p>
  <?php
  $configfile = "confs/config.php";
    include($configfile);
    $result = mysqli_query ( $conn, "
    SELECT books.*, category.name
    FROM books LEFT JOIN category
    ON books.category_id = category.id
    ORDER BY books.created_date DESC
    ");
    while($row_book = mysqli_fetch_assoc($result)): ?>

     <div class="card md-3 mb-5" >
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
              <a href="orders.php?id=<?php echo $row_book['id']?>" class ="btn btn-primary mb-3" >Add to Cart</a> 
          </div>
     </div>
     </div>
  <?php endwhile; ?>
  <!-- for all book  -->
  <a href="book_new.php" class="btn btn-primary">Add Book</a>
   </div>

<!-- pagination  -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php while($row_book = mysqli_fetch_assoc($result)): ?>
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  <?php endwhile; ?>
  </ul>
</nav>
</body>
</html>