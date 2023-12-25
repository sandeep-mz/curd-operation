<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "CURD";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // Note the addition of $dbname
    if (!$conn) {
        die("Connection failed:");
    }
?>
