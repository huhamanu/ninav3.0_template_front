<?php

$host = "localhost";
$user = "root";
$passwd = "";
$base = "templateGit";

$conn = mysqli_connect($host, $user, $passwd, $base);

$requeteUTF = "SET NAMES 'utf8'";
$resultatUTF = $conn->query($requeteUTF);

?>