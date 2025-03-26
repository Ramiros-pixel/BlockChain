<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "database_user";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi database rusak";
    die ("error");
}

?>