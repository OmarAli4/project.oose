<?php
include_once "users.php";
include_once "userstype.php";
$obj=new users();

foreach($_POST['usertype'] as $selected)
{
    $array= $selected;
}
$max=$obj->maxidbyidtype($array);
echo $array;
$obj->fristname=$_REQUEST["fristname"];
$obj->lastname=$_REQUEST["lastname"];
$obj->id=$max;
$obj->address=$_REQUEST["address"];
$obj->birthdate=$_REQUEST["birthdate"];
$obj->phonenum=$_REQUEST["phonenum"];
$obj->email=$_REQUEST["email"];
$obj->gender=$_REQUEST["gender"];
$obj->password=$_REQUEST["password"];
$obj->add();
header("location:modifyusersview.php");
?>