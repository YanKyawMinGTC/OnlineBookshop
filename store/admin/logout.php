<?php
session_destroy();
$_SESSION['auth']=false;
unset($_SESSION['auth']);
header("location: index.php");
?>