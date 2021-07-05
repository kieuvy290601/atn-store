<?php

$servername = "ec2-54-197-100-79.compute-1.amazonaws.com";
$username = "rprrdtdzrtpzxg";
$password = "2d35a56f76950b5785e6e3b4e6723c66e9fb4c749b7d68f5609dd55c922f7dd8";
$db = "d440qc54vpter";
$uri = "postgres://rprrdtdzrtpzxg:2d35a56f76950b5785e6e3b4e6723c66e9fb4c749b7d68f5609dd55c922f7dd8@ec2-54-197-100-79.compute-1.amazonaws.com:5432/d440qc54vpter";
// Create connection
$con = pg_connect($uri);

// Check connection
if (!$con) {
    die("Connection failed: " . pg_connect_error());
}


?>