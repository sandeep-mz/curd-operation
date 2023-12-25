<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM `employee` WHERE id = $id";
    if(mysqli_query($conn, $sql)) { 
        // echo "Deleted Successfully";
        session_start();
        $_SESSION["delete"] = "Employee Deleted successfully.";
        header("Location:index.php");
    }
}
?>
