<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Employee-Details</title>
    <style>
        .employe-details{
            background-color: #f5f5f5;
            padding: 50px;

            border: 1px solid #e5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h2>Employee-details</h2>
            <div>
                <a href="index.php" class="btn btn-primary mx-3">Back</a>
            </div>
        </header>
        <div class="employe-details my-4">
            <?php
                if(isset($_GET["id"])) {
                        # code...
                        $id = $_GET["id"];
                        include("connect.php");
                        $sql ="SELECT * FROM employee WHERE id=$id";
                        $result =  mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                    ?>
                    <h2>Full Name</h2>
                    <p> <?php echo $row ["FullName"]; ?> </p>
                    <h2>Email</h2>
                    <p><?php echo $row ["email"]; ?></p>
                    <h2>Mobile Number</h2>
                    <p><?php echo $row ["MobileNo"]; ?></p>
                    <h2>Gender</h2>
                    <p><?php echo $row ["type"]; ?></p>

                    <h2>Address</h2>
                    <p><?php echo $row ["Address"]; ?></p>

                    <h2>Comment</h2>
                    <p><?php echo $row ["comment"]; ?></p>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>