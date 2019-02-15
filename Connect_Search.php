<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "authentication";
$mysql_error = "Could Not Connect.";

mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($mysql_error);
mysql_select_db($mysql_db) or die($mysql_error);

?>
