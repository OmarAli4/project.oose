<?php /*
include_once "fun.php";
include_once "order.php";
session_start();
$obj;
$z;
if($_SESSION["objid"]==1||$_SESSION["objid"]==3)
{
    $obj=new act();
    $z=0;
}
if($_SESSION["objid"]==2)
{
    $obj=new orderdetils();
    $z=2;
}
$arr=$obj->editeact($_GET["id"]);
//$_SESSION["ir"]=$_GET["id"];
$_SESSION["ir"]=$arr;
for($i=$z;$i<count($arr);$i++)
{
    echo "<a href=edite3.php?is=".$i.">".$arr[$i]."</a>"."<br>";
}*/
?>
<!DOCTYPE html>
<html>
<head>
<?php
 ?>
</head>
<body>
  <h1>Edite</h1>
  <table border=1>
    <tr> 
<?php
include_once "fun.php";
include_once "order.php";
session_start();
$obj;
$z;
if($_SESSION["objid"]==1||$_SESSION["objid"]==3)
{
    $obj=new act();
    $z=0;
}
if($_SESSION["objid"]==2)
{
    $obj=new orderdetils();
    $z=2;
}
$arr=$obj->editeact($_GET["id"]);
//$_SESSION["ir"]=$_GET["id"];
$_SESSION["ir"]=$arr;
$gg=1;
for($i=$z;$i<count($arr);$i++)
{
    echo "<td>Edite".($gg)."</td>";
    $gg++;
}
echo "<tr></tr>";
for($i=$z;$i<count($arr);$i++)
{
    echo "<td><a href=edite3.php?is=".$i.">".$arr[$i]."</a></td>";
}
?>
</table>
</body>
</html>