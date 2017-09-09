<?php
$host = "localhost";
$username = "database username here";
$password = "database user password";	
$dbname = "host database name here";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>
