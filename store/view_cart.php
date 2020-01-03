<?php  session_start();
  if(!isset($_SESSION['cart'])) {
      header("location: index.php");
      exit();
    }  
    include("admin/confs/config.php");
    
    if(isset($_POST['clear_cart'])){
      $check_value = $_POST['clear_cart'];
      // var_dump($check_value);
    
    
      $checkbox = $_POST['check'];
      // var_dump($checkbox);
    
      for($i=0;$i<count($checkbox);$i++){
      $del_id = $checkbox[$i]; 
      mysqli_query($conn,"DELETE FROM user WHERE id ='".$del_id."'");
      $message = "Data deleted successfully !";
    }
    header("location: user_list.php");
    }
    
    ?>
<!doctype html>
<html>
<head>
  <title>View Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
  <h1>View Cart</h1>
  <form action="" method="post">
<div class="btn">

<a href="index.php" class="btn btn-secondary">Back to Shopping</a>
<a href="clear_cart.php" name="clear_cart" class="btn btn-danger">Clear Cart</a>
<!-- <input type="submit" onclick="this.form.action='clear_cart.php';" value="Clear Cart"> -->
</div>

<form action="clear_cart.php" method="post">
<table class="table">
<thead class="thead-dark">
<tr>

 <th scope="col">Book Title</th>
 <th scope="col">Quentity</th>
 <th scope="col">Price</th>
 <th scope="col">Total Price</th>
 <th scope="col">clear</th>

</tr>
</thead>
<tbody>

<tr>
<?php 
  $total = 0;
  // $i = 0;
  // $user_table= mysqli_query($conn,"SELECT * FROM books");
  // while($user= mysqli_fetch_assoc($user_table)):

         foreach($_SESSION['cart'] as $id => $qty):
         $result = mysqli_query($conn, "SELECT title, price,author FROM books WHERE id=$id");
         $row = mysqli_fetch_assoc($result);
         $total += $row['price'] * $qty;
         ?>

 <td title="Author is : <?php echo $row['author']?>"><?php echo  $row['title'] ?></td>
 <td><?php echo $qty ?></td>
 <td>$<?php echo $row['price'] ?></td>
 <td>$<?php echo $row['price'] * $qty ?></td>
 <td><input type="submit" name="delete" value="Delete"></td>
</tr>
<?php endforeach; ?> 
<tr>
   <td colspan="3" align="right"><b>Total:</b></td>
   <td>$<?php echo $total; ?></td>
 </tr>

</tbody>
</table>
</form>

<div class="footer"> &copy; <?php echo date("Y") ?>. All right reserved. </div>
         </form>
  </div>
  <script type="text/javascript">
// for delete function
$("#checkAl").click(function () {
$('#list_user input:checkbox').not(this).prop('checked', this.checked);
});
</script>
  
</body>

</html>