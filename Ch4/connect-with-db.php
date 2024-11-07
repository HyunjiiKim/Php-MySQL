<?php
$servername="localhost";
$username="root";
$password="suji1130";

$conn = new mysqli($servername,$username,$password);

if ($conn -> connect_error){
    die("Failed to connection : ". $conn->connect_error);
}
echo "Success to connection";
