<?php
include_once"order.php";
$id=$_GET["id"];
$id;
$order=new order();
$order->deleteorderbyid($id);
header("location:ordercontrol.php");
?>