<?php

$dbhost = "localhost";
$dbuser = "root";;
$dbpass = "";
$db = "accounting";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);



function CloseCon($conn)
{
$conn -> close();
}
?>
