<?php
    $r= $_REQUEST["Id"];
    include_once "users.php";
    $obj=new users;
    $obj->delete($r);
    header("location:modifyusersview.php");
 ?>
