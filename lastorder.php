<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>all orders for selected patient</h1>
  <table border=1>
    <tr> 
      <td>orderid</td>
      <td>name</td>
      <td>time</td>
      <td>Date</td>
      <td>cost</td>
      <td>type</td>
      <td>Edite</td>
      <td>cancel order</td>
<?php
include_once "order.php";
$id=$_REQUEST["id"];
$objorder=new order();
session_start();
$_SESSION["objid"]=2;
$arr=$objorder->listorderbyid($id);

    echo "<tr><td>".$arr[count($arr)-1]->getorderid()."</td><td>".$arr[count($arr)-1]->getnamebyid($arr[count($arr)-1]->getpatientid())."</td><td>".$arr[count($arr)-1]->gettime()."</td><td>".$arr[count($arr)-1]->getdate()."</td><td>".$arr[count($arr)-1]->getcost()."</td><td>".$arr[count($arr)-1]->getordertypename()."</td><td><a href=edite2.php?id=".$arr[count($arr)-1]->getorderid().">Edite</a></td><td><a href=deleteorder.php?id=".$arr[count($arr)-1]->getorderid().">cancle order</a></td></tr>";

?>
<tr>
  <td>
    <a href="ordercontrol.php">go back</a>
    </td>
</tr>
</table>
</body>
</html>