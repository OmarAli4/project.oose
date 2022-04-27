<?php
include_once "users.php";
session_start();
$obj=new usertype();
$obj->usertype=$_REQUEST["usertype"];
foreach($_POST['menutype'] as $selected)
{
    $array= $selected;
}
$obj->add();
$_SESSION["array"]=$array;
$_SESSION["obj->id"]=$obj->id;
header("location:usertypemenucontrol.php");
?>