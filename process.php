<?php
include("connect.php"); // Assuming this file establishes the database connection

if (isset($_POST["submit"])) { // Use square brackets []
    $FullName = mysqli_real_escape_string($conn,$_POST["FullName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $MobileNo = mysqli_real_escape_string($conn, $_POST["MobileNo"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $sql = "INSERT INTO employee(FullName,email, MobileNo,type, Address,comment) VALUES ('$FullName','$email', '$MobileNo','$type', '$Address','$comment')";
    if(mysqli_query($conn, $sql)){
        // echo "Record inserted successfully.";
        session_start();
        $_SESSION["create"] = "Record inserted successfully.";
        header("Location:index.php");

    }else{
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) { // Use square brackets []
    $FullName = mysqli_real_escape_string($conn,$_POST["FullName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $MobileNo = mysqli_real_escape_string($conn, $_POST["MobileNo"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE employee SET fullName= '$FullName',email='$email', MobileNo='$MobileNo',type = '$type', Address = '$Address', comment = '$comment' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        // echo "Record Updated successfully.";
        session_start();
        $_SESSION["Update"] = "Record Updated successfully.";
        header("Location:index.php");
        
    }else{
        die("Something went wrong");
    }
}
?>
