<?php
include("confs/config.php");
  if($dbconnection){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone_no=$_POST['phone_no'];
    $address=$_POST['address'];

    var_dump(count($id));
    for($i=0;$i<count($id);$i++)
    {
     mysqli_query($conn,"UPDATE user SET name='$name[$i]',email='$email[$i]', password='$password[$i]',phone_no='$phone_no[$i]',address='$address[$i]',modified_date=now() WHERE id=$id[$i]");	
     header("location: user_list.php") ;
    }
  }else{
    die("no connection of db");
  }

?>