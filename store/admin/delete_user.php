<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"store");
    if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
    }


if(isset($_POST['save'])){
  $check_value = $_POST['save'];
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
// $result = mysqli_query($conn,"SELECT * FROM user");
?>