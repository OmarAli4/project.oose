<?php
session_start();
include_once "users.php";
include_once "order.php";
include_once "userstype.php";

include_once "orderdetils.php";

$arr= $_SESSION["ir"];
$as=$_REQUEST["colum"];
$oldrecord="";
$newrecord="";
$actobj;
if($_SESSION["objid"]==4)
{
    $actobj=new usertype();
}
if($_SESSION["objid"]==1||$_SESSION["objid"]==3)
{
    $actobj=new users();
}
if($_SESSION["objid"]==2)
{
    $actobj=new orderdetils();
    $z=2;
}
for($i=0;$i<count($arr);$i++)
{
    if($i!=$_SESSION["iss"])
    {
     if($i==0)
     {
        $oldrecord=$arr[$i];
        $newrecord=$arr[$i];
     }
     else
     {
        $oldrecord=$oldrecord.$actobj->filemanagerobj->s.$arr[$i];
        $newrecord=$newrecord.$actobj->filemanagerobj->s. $arr[$i];
     }
    }
    else
    {
        if($i==0)
        {
            $oldrecord=$arr[$i];
            $newrecord=$as;
        }
        else
        {
        $oldrecord=$oldrecord.$actobj->filemanagerobj->s.$arr[$i];
        $newrecord=$newrecord.$actobj->filemanagerobj->s. $as;
        }
    }
}
$actobj->filemanagerobj->editerecord2($oldrecord,$newrecord);
if($_SESSION["objid"]==1)
{
    header("location:modifyusersview.php");
}
if($_SESSION["objid"]==4)
{
    header("location:modifyuserstypeview.php");
}
if($_SESSION["objid"]==2||$_SESSION["objid"]==3)
{
    header("location:orderview.php");
}
?>