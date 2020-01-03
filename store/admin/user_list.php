<?php

if(isset($_POST['submit_row']))
{
  
include("confs/config.php"); 

if($dbconnection){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone_no=$_POST['phone_no'];
  $address=$_POST['address'];
  for($i=0;$i<count($name);$i++)
  {
   if($name[$i]!="" && $email[$i]!="" && $password[$i]!="" && $phone_no[$i] !="" && $address[$i] !="")
   {
    mysqli_query($conn,"INSERT INTO user (name,email,password,phone_no,address,created_date,modified_date) VALUES('$name[$i]','$email[$i]','$password[$i]','$phone_no[$i]','$address[$i]',now(),now())");	 
   }
  }
}else{
  die("no connection of db");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User List</title>
<!-- for datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<!-- for jquery databable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

</head>
<style>
body{
  box-sizing: border-box;
}
input{
  border:none;
}
.inner{
  padding:0 30px;
}
.active{
  display:none;
}
</style>
<body>

<div class="inner">
<div><?php if(isset($message)) { echo $message; } ?>
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
        <a class="nav-link " href="logout.php">Logout</a>
      </li>
      </ul>
    </div>
  </nav>

<!-- for add user  -->
<div id="form_div"class="mt-5 mb-5">
 <form method="post" action="user_list.php">
 <div id="add_row_one" class="active">
 <h2>Add User</h2>
  <table id="employee_table" align="center" class="table ">
   <tr id="row1">
    <td><input type="text" name="name[]" placeholder="Enter Name"></td>
    <td><input type="text" name="email[]" placeholder="Enter Email"></td>
    <td><input type="text" name="password[]" placeholder="Enter Password"></td>
    <td><input type="text" name="phone_no[]" placeholder="Enter Phone"></td>
    <td><input type="text" name="address[]" placeholder="Enter Address"></td>
    <td><input type="submit" name="submit_row" value="SUBMIT" class="btn btn-primary"></td>
   </tr>
  </table>
  </div>
 </form>
</div>

<h1>User List</h1>
<form action="" method="post">
  <table class="table">
  <thead>
  <tr>
        <th class="col"><input type="checkbox" id="checkAl">Select All</th>
        <th class="col">User id</th>
        <th class="col">User Name</th>
        <th class="col">User Email</th>
        <th class="col">User Password</th>
        <th class="col">User Phone</th>
        <th class="col">User Address</th>
      </tr>
  </thead>

    <?php 
    include("confs/config.php");
    $i=0;
    $user_table= mysqli_query($conn,"SELECT * FROM user");
  while($user= mysqli_fetch_assoc($user_table)):?>
  <tbody>
  <tr>
      <td><input type="checkbox" class="chkbox" id="checkItem" name="check[]" value="<?php echo $user["id"]; ?>"></td>
      <td><input type="text" value="<?php echo $user['id'] ?>"></td>
      <td><input type="text" value="<?php echo $user['name'] ?>" ></td>
      <td><input type="text" value="<?php echo $user['email'] ?>" ></td>
      <td><input type="text" value="<?php echo $user['password'] ?>" ></td>
      <td><input type="text" value="<?php echo $user['phone_no'] ?>" ></td>
      <td><input type="text" value="<?php echo $user['address'] ?>" ></td>
    </tr>
    <?php
     $i++;
      endwhile; ?>
    <tr>
    <td><input type="button" onclick="add_row();" value="ADD User" class="btn btn-primary"></td>
    <td><input type="submit" class="btn btn-danger" name="save" value="DELETE"  onclick="this.form.action='delete_user.php';"></td>
    <td><input type="submit" class="btn btn-primary" name="edit_user" id="update()" value="Update User" onclick="this.form.action='update_user.php';"></td>
    </tr>
  </tbody>

  </table>
  </form>
</div>
</div>

<script type="text/javascript">
// for delete function
$("#checkAl").click(function () {
$('#list_user input:checkbox').not(this).prop('checked', this.checked);
});
// $('#checkAl').click(function(){
// 		if(this.checked)
// 			$(".chkbox").prop("checked", true);
// 		else
// 			$(".chkbox").prop("checked", false);
// 	});
// for add user
function add_row(){
  $("#add_row_one").removeClass("active");
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter name'></td><td><input type='text' name='email[]' placeholder='Enter Name'></td><td><input type='text' name='password[]' placeholder='Enter Password'></td><td><input type='text' name='phone_no[]' placeholder='Enter Phone'></td><td><input type='text' name='address' placeholder='Enter Address'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno){
  $('#'+rowno).remove();
}
// for edit user
function edit_row(){
  $("#edit_user").removeClass("active");
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter name'></td><td><input type='text' name='email[]' placeholder='Enter Name'></td><td><input type='text' name='password[]' placeholder='Enter Password'></td><td><input type='text' name='phone_no[]' placeholder='Enter Phone'></td><td><input type='text' name='address' placeholder='Enter Address'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno){
  $('#'+rowno).remove();
}
</script>


 
</body>
</html>