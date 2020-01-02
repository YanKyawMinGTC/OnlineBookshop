
<?php include_once 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Delete student data</title>
</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
  <th><input type="checkbox" id="checkAl"> Select All</th>
	<th>Employee Id</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>City</th>
</tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)): 
?>
<tr>
  <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"></td>
  <td><?php echo $row["user_id"]; ?></td>
	<td><?php echo $row["first_name"]; ?></td>
	<td><?php echo $row["last_name"]; ?></td>
	<td><?php echo $row["city_name"]; ?></td>
</tr>
<?php
$i++;
endwhile;
?>
</table>
<p align="center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>