<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="store";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
// var_dump($conn);
$dbconnection=mysqli_select_db($conn,$dbname);

if($dbconnection){
  // var_dump("db connection is OK.<br>");
}else{
  var_dump("db connection is fall.....<br>");
}
?>