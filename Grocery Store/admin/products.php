<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products</title>

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
            <h3> <i class="fa fa-eye text-info"></i> View Products</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./add-product.php" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Proudcts</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php  
                    
                    require_once("./db-con.php");
                    $get_products = "SELECT  products.*,categories.category FROM products LEFT JOIN categories ON products.category_id = categories.id";
                    $result = mysqli_query($con , $get_products);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){


                    ?>

                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['unit_price'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['quantity'] ?></td>
                            <td><img src="./images/Product/<?php echo $row['image'] ?>" height="50px" alt=""></td>
                            
                            <td><span class="badge bg-info text-white px-2"><?php echo $row['status'] ?></span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info text-white dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit-product.php?id=<?= $row['id'] ?>">Edit</a>
                                        <a class="dropdown-item" href="delete-product.php?id=<?= $row['id'] ?>">Delete</a>
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