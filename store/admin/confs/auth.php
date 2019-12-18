<?php
var_dump("auth run");
session_start();
if(!isset($_SESSION['auth'])){
  header("location: index.php");
  var_dump("auth session run");
  exit();
}