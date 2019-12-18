<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  
  </title>
</head>
<body>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  </head>
  <body>
  <div class="container">
  <h1>Book Store</h1>
  <a href="view_cart.php">(<?php echo $cart ?>) Books in your cart </a>
  <a href="index.php" class="btn btn-primary">All Categories</a>
  <?php while($row=mysqli_fetch_assoc($cats)): ?>
  <a href="index.php?cat=<?php echo $row['id']?>">
  <?php echo $row['name'] ?>
  </a>
  <?php endwhile; ?>
  <div>
 
  <?php while($row=mysqli_fetch_assoc('$books')): ?>
    <div class="cover_photo">
  <img src="admin/covers/<?php echo $row['cover'] ?>" alt="">
  </div>
  <a href="book_detail.php?id='<?php echo $row['id']?>"><?php echo $row['title'] ?></a>
  <i><?php echo $row['price'] ?></i>
  <a href="add_to_cart.php?id='<?php echo $row['id'] ?>'">
  Add to Cart
  </a>
  <?php endwhile; ?>
  <div class="footer">
  &copy;<?php echo date['Y'] ?>. All right reserved.
  </div>
  </div>
  </div>
  </body>
  </html>
</body>
</html>