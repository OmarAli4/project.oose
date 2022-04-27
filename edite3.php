<!DOCTYPE html>
<html>
<head>
</head>
<form action="edite.php" method="POST">
  edit<br> <input type="text" name="colum">
  <br>
  <input type="submit">
</form>
<?php
session_start();
$_SESSION["iss"]=$_GET["is"];
?>
<tr>
  <td>
    </td>
</tr>
</table>
</body>
</html>