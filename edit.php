<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
                <h2>Edit Employee</h2>
                <div>
                    <a href="index.php" class="btn btn-primary mx-3">Back to List</a>
                </div>
        </header>
        
        <?php 
           
           if(isset($_GET["id"])){
                $id = $_GET["id"];
                include("connect.php");
                    $sql ="SELECT * FROM employee WHERE id=$id";
                    $result =  mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                ?>
                    <form action="process.php" method="post">
                        <!-- form-data -> from-element -->
                        <div class="form-data my-4"> 
                            <input type="text" class="form-control"name="FullName" value ="<?php echo $row ["FullName"]; ?>" placeholder= "Employee Name">
                        </div>
                        <div class="form-data my-4"> 
                            <input type="email" class="form-control"name="email" value ="<?php echo $row ["email"]; ?>" placeholder= "Employee Email">
                        </div>
                        <div class="form-data my-4"> 
                            <input type="telephone" class="form-control"name="MobileNo" value ="<?php echo $row ["MobileNo"]; ?>" placeholder= "Mobile no.">
                        </div>
                        <div class="form-data my-4"> 
                            <select name="type" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male" <?php if($row['type']=="male"){echo "selected";}?> >Male</option>
                                <option value="female" <?php if($row['type']=="female"){echo "selected";}?> >Female</option>
                            </select>
                        </div>
                        <div class="form-data my-4"> 
                            <input type="text" class="form-control"name="Address" value ="<?php echo $row ["Address"]; ?>" placeholder= "Address">
                        </div>
                        <div class="form-data my-4"> 
                            <input type="text" class="form-control"name="comment" value ="<?php echo $row ["comment"]; ?>" placeholder= "Comment">
                        </div>

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-data">
                            <input type="submit" class="btn btn-primary mt-3"name="edit" value="Update">
                        </div>
                    </form>
                <?php 
            }
        ?>
        
    </div>
</body>
</html>