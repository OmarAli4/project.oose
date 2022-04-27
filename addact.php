<?php
// echo "act name is ".$_REQUEST["actname"];
include_once"fun.php";
$actname=$_REQUEST["actname"];
$acttime=$_REQUEST["time"];
$actobj=new act();
$actobj->actname=$actname;
$actobj->acttime=$acttime.":00am";
$actobj->storact();
header("location:sobeih.php");
 ?>
