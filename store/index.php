<?php 
  include('functions.php');
  // session_start();  
  include("admin/confs/config.php"); 
   $cart = 0; 
    if(isset($_SESSION['cart'])) { 
        foreach($_SESSION['cart'] as $qty) { 
               $cart += $qty;   
               }
              }

	// if (!isLoggedIn()) {
	// 	$_SESSION['msg'] = "You must log in first";
	// 	header('location: login.php');
	// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../images/book_favicon.jpg" type="image/jpn" sizes="16x16">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
  .container {
    margin: 0 auto;
  }

  textarea {
    width: 100%;
    height: 200px;
    resize: none;
  }

  i {
    margin-right: 30px;
    cursor: pointer;
  }

  .form-control {
    border: none;
  }
  </style>
</head>

<body>
  <div class="container pt-5">
    <div class="btn-toolbar justify-content-between mb-5" role="toolbar" aria-label="Toolbar with button groups">
      <div class="btn-group" role="group" aria-label="First group">
        <a class="btn btn-secondary" href="cat_list.php">Categories</a>
        <a class="btn btn-secondary" href="cat_list.php">Manage Categories</a>
        <a class="btn btn-secondary" href="cat_list.php">Manage Categories</a>
        <a class="btn btn-secondary" href="login.php">Login</a>
      </div>
      <div class="input-group">
        <div class="form-control">
          <div> <?php  if (isset($_SESSION['user'])) : ?> <img src="images/admin_profile.png"
              style="width:100px;height:100px;">
            <strong><?php echo $_SESSION['user']['username']; ?></strong>
            <small>
              <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
              <br>
              <a href="index.php?logout='1'" class="btn text-primary">logout</a> <?php if($_SESSION['user']['user_type'] == 'admin'):          
              echo '<a class="btn text-primary" href="admin/create_user.php">Add user</a>';
              ?> <?php endif; ?> </small> <?php endif ?> </div>
               <a href="view_cart.php" class=""> (<?php echo $cart ?>) books in your cart </a>
        </div>
      </div>
    </div>
   
    <h1 class="text-primary mb-5 mt-3">Book List</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, similique assumenda quasi magnam eum
      numquam fugit fugiat facere vero. Odit consequatur deleniti dolorem illo magnam eveniet facere, vero a modi?</p> <?php
  $configfile = "admin/confs/config.php";
    include($configfile);
    $result = mysqli_query ( $conn, "
    SELECT books.*, category.name
    FROM books LEFT JOIN category
    ON books.category_id = category.id
    ORDER BY books.created_date DESC
    ");
    while($row_book = mysqli_fetch_assoc($result)): ?> <div class="card md-3 mb-5">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="admin/covers/<?php echo $row_book['cover']?>" alt="" style="height:200px">
        </div>
        <div class="col-md-8 pl-5">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row_book['title'] ?></h5>
            <p><i><?php echo $row_book['author']?></i></p>
            <p><small>(in <?php echo $row_book['name']?>)</small></p>
            <p><span>$<?php echo $row_book['price'] ?></span></p>
            <p class="card-text"><?php echo $row_book['summary']?></p>
          </div> <?php if($_SESSION['user']['user_type'] == 'admin'):

              echo '<a href="admin/book_del.php?id=<?php echo $row_book[\'id\']?>" class="btn btn-primary
          mb-3">Delete</a>
          <a href="admin/book_edit.php?id=<?php echo $row_book[\'id\']?>" class="btn btn-primary mb-3">Update</a>' ?>
          <?php endif; ?> <?php
               if($_SESSION['user']['user_type'] == 'user'): 
            echo '<a href="add_to_cart.php?id=<?php echo $row_book[\'id\']?>" class ="btn btn-primary mb-3" >Add to
          Cart</a>' ?> <?php endif; ?> 
          <a href="add_to_cart.php?id=<?php echo $row_book['id']?>"
            class="btn btn-primary mb-3">Add to Cart</a>
        </div>
      </div>
    </div> <?php endwhile; ?>
    <!-- for all book  -->
    <a href="admin/book_new.php" class="btn btn-primary">Add Book</a>
  </div>
</body>

</html>