<?php
include_once"fun.php";
$actobj=new act();
$actobj->deleteact($_GET["id"]);
header("location:sobeih.php");
 ?>
