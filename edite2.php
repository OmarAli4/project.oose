<?php 
include_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php
 ?>
</head>
<body>
  <h1>Edit</h1>
<?php
include_once "users.php";
include_once "order.php";
include_once "userstype.php";
include_once "orderdetils.php";
$obj;
$z;
if($_SESSION["objid"]==1||$_SESSION["objid"]==3)
{
    $obj=new users();
    $z=0;
}
if($_SESSION["objid"]==4)
{
    $obj=new usertype();
    $z=0;
}
if($_SESSION["objid"]==2)
{
    $obj=new orderdetils();
    $z=2;
}
$arr=$obj->edit($_REQUEST["id"]);
//$_SESSION["ir"]=$_GET["id"];
$_SESSION["ir"]=$arr;
$gg=1;
?>
<table>
      <thead>

<?php
for($i=$z;$i<count($arr);$i++)
{
?>
    <?php echo "<th>Edit".($gg)."</th>";
    $gg++;
    ?>
<?php
}
?>
    <thead>
      <tbody>
<tr>
<?php 
for($i=$z;$i<count($arr);$i++)
{
?>
    <?php echo "<td><a href=edite3.php?is=".$i.">".$arr[$i]."</a></td>";?>
<?php
}
?>
</tr>
</tbody>
    <table/> 
</body>
</html>
<?php
include_once "footer.php";
?>