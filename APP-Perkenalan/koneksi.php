<?php

$server = "localhost";
$username ="root";
$password = "";
$databases ="appperkenalan";

$db = mysqli_connect($server, $username, $password, $databases);
echo "test";

if (!$db) { 
			die("gagal terhubung dengan database :".mysqli_connect_error());

}
?>