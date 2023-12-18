<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'akademik';
$koneksi = mysqli_connect($server, $user, $pwd);
mysqli_select_db($koneksi, $database);