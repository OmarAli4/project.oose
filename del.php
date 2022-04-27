<?php
include_once"users.php";
$actobj=new users();
$actobj->delete($_GET["id"]);
header("location:orderview.php");
 ?>
