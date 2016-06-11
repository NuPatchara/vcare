<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
$host = "localhost";
$username = "mouse2mout";
$password = "m2mBbM-s";
$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("mouse2mout_winkwow");

$strSQL = "SELECT * FROM vote";
$objQuery = mysql_query($strSQL) or die (mysql_error());

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">IP </div></th>
    <th width="97"> <div align="center">Time </div></th>
    <th width="59"> <div align="center">Vote </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><?php echo $objResult["id"];?></td>
    <td><?php echo $objResult["name"];?></td>
    <td><?php echo $objResult["ip"];?></td>
    <td><?php echo $objResult["time"];?></td>
    <td><?php echo $objResult["vote"];?></td>
  </tr>
<?php 
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>