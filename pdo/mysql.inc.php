<?php
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',); 
$dbh = new PDO('mysql:host=localhost;dbname=sample_db',"root","1234",$options);
?>