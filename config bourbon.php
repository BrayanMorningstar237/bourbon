<?php 
$servername = "localhost";
$username = "root";
$password = "2992004.password";
$database = "bourbon";

        $conn = new mysqli($servername, $username, $password,$database);
        if($conn->connect_error) {
            die("connection failed: ".$conn->connect_error );
        }

?>