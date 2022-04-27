<?php
session_start();
$username=$_REQUEST["email"];
$password=$_REQUEST["password"];
if($username=="ahmed@sobeih"&&$password=="123")
{
    $_SESSION["username"]="ahme@sobeih";
    echo "done";
}
else
{
  echo "error";
}

 ?>
