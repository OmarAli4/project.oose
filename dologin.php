<?php
session_start();
include_once "usertypemenu.php";
$email=$_REQUEST["Email"];
$password=$_REQUEST["password"];
include_once "users.php";
$obj=new users();
$obju=new usertypemenu();
$s=$obj->login($email,$password);
$usert=$obju->retrunmenutypebyusertypeid($s->usertype->id);
if($s!=null)
{
    $_SESSION["Email"]=$email;
    $name=$usert->getname();
    //echo $name;
     header("location:$name");

}
else
{
   header("location:login.php");
}

?>