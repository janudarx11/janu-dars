<?php
$host = "localhost";
$username = "janu-dars-1";
$password = "delete123";	
$dbname = "jan-site";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>
