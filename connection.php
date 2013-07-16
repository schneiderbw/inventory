<?php
include 'config.php';
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database server");
mysql_select_db($mysql_database, $bd) or die("Could not select database from database server");
?>