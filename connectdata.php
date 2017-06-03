<html>
<head>
<title>ทบสอบโปรแกรม connect map data</title>
</head>
<body>
<?php
$host = "XXXXXXXXXXXX";
$username = "xxxxxx";
$password = "xxxxxxxxxx";
$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("databasename");

$strSQL = "SELECT * FROM xxxxxxx";
$objQuery = mysql_query($strSQL) or die (mysql_error());

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">xxxxx </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["xxx"];?></div></td>
    <td><?php echo $objResult["xxx"];?></td>
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
