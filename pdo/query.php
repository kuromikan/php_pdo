<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.inc.php");
$sql="select * from `member`";
foreach($dbh->query($sql) as $row) 
{
	print_r($row);
	echo "<br>";
}
$dbh = null;
?>