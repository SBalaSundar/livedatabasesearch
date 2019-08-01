<?php
$con = MySQLi_connect("localhost","root","","email_id");
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>
