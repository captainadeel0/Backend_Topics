<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Users</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">




        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-eye text-info"></i> View User</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./add-user.php" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add User</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                        <th>Image</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile.No</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php  
                    
                    require_once("./db-con.php");
                    $select = "SELECT * FROM users";
                    $result = mysqli_query($con , $select);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){


                    ?>

                        <tr>
                        <td><img src="./images/users/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['role'] ?></td>
                            
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <?php 
                             }
                            } 
                        ?>

                    </tbody>
                </table>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>