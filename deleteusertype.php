<?php
    $r= $_REQUEST["Id"];
    include_once "userstype.php";
    $obj=new usertype();
    $obj->delete($r);
    header("location:modifyuserstypeview.php");
 ?>
