<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Employee-List</title>
</head>
<body>
    
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h2>Employee-List</h2>
            <div>
                <a href="create.php" class="btn btn-primary mx-3">Add New Employee</a>
            </div>
        </header>

        <?php 
            session_start();
            if(isset ($_SESSION["create"])){
                // echo '<p style="color:green;">'.$_SESSION['create'].'</p>';
                // unset($_SESSION["create"]);
                ?>
                 <div class="alert alert-success">
                    <?php echo $_SESSION["create"];
                    unset($_SESSION["create"]);
                    ?>
                 </div>
                <?php
            }
        ?>

        <?php 
            if(isset ($_SESSION["edit"])){
                ?>
                 <div class="alert alert-success">
                    <?php echo $_SESSION["edit"];
                    unset($_SESSION["edit"]);
                    ?>
                 </div>
                <?php
            }
        ?>

        <?php 
            if(isset ($_SESSION["delete"])){
                // echo '<p style="color:green;">'.$_SESSION['create'].'</p>';
                // unset($_SESSION["create"]);
                ?>
                 <div class="alert alert-success">
                    <?php echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                    ?>
                 </div>
                <?php
            }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Full Name</td>
                    <td>Email</td>
                    <td>Mobile No.</td>
                    <td>Gender</td>
                    <td>Address</td>
                    <!-- <td>comment</td> -->
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM employee";
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td> <?php echo $row["id"]; ?> </td>
                        <td> <?php echo $row["FullName"]; ?> </td>
                        <td> <?php echo $row["email"]; ?> </td>
                        <td> <?php echo $row["MobileNo"]; ?> </td>
                        <td> <?php echo $row["type"]; ?> </td>
                        <td> <?php echo $row["Address"]; ?> </td>
                
                        <td>
                        <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read more</a>
                        <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
