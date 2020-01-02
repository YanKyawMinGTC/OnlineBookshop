

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
  <!-- for edit user  -->
<div id="form_div" >
<h1>Update User</h1>
 <form method="post" action="">
 <table class="table table-dark" id="list" >
      <tr>
      <th>User Name</th>
      <th>User Email</th>
      <th>User Password</th>
      <th>User Phone</th>
      <th>User Address</th>
      </tr>
    <tbody>
    <?php
   include("confs/config.php");  
   if(isset($_POST['edit_user'])){
    $checkbox = $_POST['check'];
    var_dump($checkbox);
    var_dump(count($checkbox));
    for($i=0;$i< count($checkbox);$i++){
    $update_id = $checkbox[$i];

   $row =  mysqli_query($conn,"SELECT * FROM user WHERE id ='".$update_id."'");
   while($user = mysqli_fetch_array($row)) {
 ?>
 <tr> <td><input type="hidden" name="id[]" value="<?php echo $user['id']?>"></td></tr>
     <tr>
      <td><input type="text" name="name[]" value="<?php echo $user['name'] ?>"></td>
      <td><input type="text" name="email[]" value="<?php echo $user['email'] ?>"></td>
      <td><input type="text" name="password[]" value="<?php echo $user['password'] ?>"></td>
      <td><input type="text" name="phone_no[]" value="<?php echo $user['phone_no'] ?>"></td>
      <td><input type="text" name="address[]" value="<?php echo $user['address'] ?>"></td>
    </tr>
    <?php 
     }
  }
} 
?>
    </tbody>
    <td><input type="submit" class="btn btn-primary" name="update_user" value="Update User" onclick="this.form.action='update_action.php';"></td>
    </tr>
  </table>
</form>
</div>

</body>
</html>

