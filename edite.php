<?php
session_start();
include_once "fun.php";
include_once "order.php";
$arr= $_SESSION["ir"];
$as=$_REQUEST["colum"];
$oldrecord="";
$newrecord="";
$actobj;
if($_SESSION["objid"]==1||$_SESSION["objid"]==3)
{
    $actobj=new act();
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
        $oldrecord=$oldrecord.$actobj->filemangerobj->separator.$arr[$i];
        $newrecord=$newrecord.$actobj->filemangerobj->separator. $arr[$i];
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
        $oldrecord=$oldrecord.$actobj->filemangerobj->separator.$arr[$i];
        $newrecord=$newrecord.$actobj->filemangerobj->separator. $as;
        }
    }
}
$actobj->filemangerobj->editerecord2($oldrecord,$newrecord);
if($_SESSION["objid"]==1)
{
    header("location:sobeih.php");
}
if($_SESSION["objid"]==2||$_SESSION["objid"]==3)
{
    header("location:ordercontrol.php");
}
?>