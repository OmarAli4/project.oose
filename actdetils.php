<?php
include_once "fun.php";
$actobj=new act();
$actobj=$actobj->getactfromfilebyid($_GET["id"]);
echo $actobj->actname." ".$actobj->acttime;
 ?>
