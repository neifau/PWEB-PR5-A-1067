<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "task_pr6";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error){
    die("Koneksi gagal");
}

