<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$db = "db";  
$konek = mysql_connect($host, $user, $pass) or die ('Failed connection!');
mysql_select_db($db);
?>