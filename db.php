<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'newtable';
$conn=mysqli_connect($servername,$username, $password, "$dbname");
$insert = "insert into users values(13,'moa', 'pmlk')";
mysqli_query($conn, $insert);

