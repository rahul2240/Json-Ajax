<?php

// connection to database with database name ncs1

$conn = new mysqli('localhost','root','','ncs1');

if($conn->connect_error)
{ die("connection error" . $conn->connect_error);
}

?>