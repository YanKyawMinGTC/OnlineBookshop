<?php
  $configfile = "confs/config.php";
    include($configfile);

$bookname=$_POST['title'];
$bookauthor=$_POST['author'];
$summary= $_POST['summary'];
$price=$_POST['price'];
$cat_id=$_POST['category_id'];
$cover=$_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
// var_dump($bookname);
// var_dump($bookauthor);
// var_dump($summary);
// var_dump($price);
// var_dump($cat_id);
// var_dump($cover);
// var_dump($tmp);
if($cover){
  move_uploaded_file($tmp, "covers/$cover");
}
$sql="INSERT INTO books(title,author,summary,price,category_id,cover,created_date,modified_date)
VALUES ('$bookname','$bookauthor','$summary','$price','$cat_id', '$cover',now(),now())";
mysqli_query($conn,$sql);
 header("location: book_list.php");
?>