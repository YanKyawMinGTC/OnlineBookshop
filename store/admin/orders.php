
<?php
  // include('../functions.php');
  session_start();
$fileconfig="confs/config.php";
if(file_exists($fileconfig)){
  include($fileconfig);
  $id = $_GET['id'];
  $_SESSION['cart'][$id]++;
  var_dump($id);
  $book = mysqli_query($conn,"SELECT * FROM books WHERE id = $id");
  header("location: ../index.php");
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
  <title>Orderc List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>

<div class="container">
<form>
  <div class="form-group row">
  <div class="col row">
   
    <label for="name" class="col-sm-2 col-form-label">Customer</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="name" value="Yan Kyaw Min">
    </div>
    <label for="phone" class="col-sm-2 col-form-label">Phone no;</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="phone" value="0937923482439">
    </div>
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="address" value="YanKin , Yangon twsp; ">
    </div>
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="email" value="yan@gmail.com">
    </div>
    <label for="order_date" class="col-sm-2 col-form-label">Date of order</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="order_date" value="20/2/2-019">
    </div>
  </div>
  </div>
</form>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Price</th>
      <th scope="col">Book code</th>
      <th scope="col">Number of item</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row_book = mysqli_fetch_assoc($book)): ?>
    <tr>
      <td><?php echo $row_book['title'] ?></td>
      <td><?php echo $row_book['author'] ?></td>
      <td><?php echo $row_book['price'] ?></td>
      <td>Book Code</td>
      <td>3</td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>