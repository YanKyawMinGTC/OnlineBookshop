


<?php
//---------------------------
 //Delete
 session_start();
 if ( isset($_POST["delete"]) ) {
   $i = $_POST["delete"];
   die($i);
   $qty = $_SESSION['cart'][$id];
   $qty--;
   $_SESSION["qty"][$i] = $qty;

 //remove item if quantity is zero
 if ($qty == 0) {
   $row['price'][$i] = 0;
   unset($_SESSION["cart"][$i]);
 }
 else
 {
  //  $row['price'][$i] = $amounts[$i] * $qty;
 }
 }
//  header("location: view_cart.php");

?>