<?php
include_once("confs/config.php");

// Check if delete button active, start this
$delete = $_POST['delete'];
if(isset($delete))
{
  var_dump($delete);
    $checkbox = $_POST['checkbox'];

  $result=mysqli_query($conn,"SELECT * FROM $user");
  $count=mysqli_num_rows($result);
  
for($i=0;$i<$count;$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM $user WHERE id='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=user_list.php\">";
}
}
?>