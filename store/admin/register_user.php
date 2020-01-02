<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F9E79F;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#9A7D0A;
}
#wrapper h1 p
{
 font-size:18px;
}
#employee_table input[type="text"]
{
 width:120px;
 height:35px;
 padding-left:10px;
}
#form_div input[type="button"]
{
 width:110px;
 height:35px;
 background-color:#D4AC0D;
 border:none;
 border-bottom:3px solid #B7950B;
 border-radius:3px;
 color:white;
}
#form_div input[type="submit"]
{
 margin-top:10px;
 width:110px;
 height:35px;
 background-color:#D4AC0D;
 border:none;
 border-bottom:3px solid #B7950B;
 border-radius:3px;
 color:white;
}

</style>

<script type="text/javascript">
function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter name'></td><td><input type='text' name='email[]' placeholder='Enter Name'></td><td><input type='text' name='password[]' placeholder='Enter Password'></td><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
  $('#'+rowno).remove();
}
</script>
</head>
<body>
<?php 
include("confs/auth.php"); 
?>
<div id="wrapper">
<h1>Register User</h1>
<div id="form_div">
 <form method="post" action="user_list.php">
  <table id="employee_table" align=center>
   <tr id="row1">
    <td><input type="text" name="name[]" placeholder="Enter Name"></td>
    <td><input type="text" name="email[]" placeholder="Enter Email"></td>
    <td><input type="text" name="password[]" placeholder="Enter Password"></td>
   </tr>
  </table>
  <input type="button" onclick="add_row();" value="ADD ROW">
  <input type="submit" name="submit_row" value="SUBMIT">
 </form>
</div>

</div>
</body>
</html>