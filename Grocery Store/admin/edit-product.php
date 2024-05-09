
<?php
 require_once("./db-con.php");

$id = $_GET['id'];
if(!empty($id)){

    
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($con , $sql);

if ($row= mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $unit_price = $row['unit_price'];
        $category = $row['category_id'];
        $quantity = $row['quantity'];
        $image = $row['image'];
        $description = $row['description'];
}
   } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Products</title>

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
<div class="row">
    <div class="col-md-6">            
        <h3> <i class="fa fa-plus text-success"></i> Edit Products</h3>
</div>
<div class="col-md-6">
    <img src="./images/Product/<?= $image ?>" height='50px' alt="">
</div>
</div>            
            <hr>

            <div class="form-container">
                <form action="./update-product.php" method="POST" enctype="multipart/form-data" class="row">

                <input type="hidden" value="<?= $row['id'] ?>" name="id">

                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name">Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" value="<?= $row['name'] ?>" name="name" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="unit_price">Unit Price <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" value="<?= $row['unit_price'] ?>" placeholder="Enter here..." required>
                    </div>



                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="category">Category <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" name="category_id" value="<?= $row['category_id'] ?>" id="category_id">
                        <option value="-1">Choose here</option>
                          
                            <?php

                            $select_cat = "SELECT * FROM categories";
                            $result2 = mysqli_query($con, $select_cat);

                            if (mysqli_num_rows($result2) > 0) {

                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    if($row2['id'] == $category ){
                                        $selected = "selected";
                                    }else{
                                        $selected = "";
                                    }
                            ?>

                            <option <?= $selected ?> value="<?php echo $row2['id'] ?>"> <?php echo $row2['category'] ?>  </option>

                            <?php  } } ?>
                        </select>
                    </div>



                    <div class="col-lg-6 ">
                        <label class="form-label" for="quantity">Quantity <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $row['quantity'] ?>" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4">
                    <label class="form-label" for="userimage">Category Image <span class="text-danger">*</span>
                    </label>

                    <input type="file" class="form-control" id="userimage" name="new_image" accept="image/*">
                    <input type="hidden" class="form-control" value="<?= $row['image'] ?>" name="old_image" accept="image/*" required>
                </div>

                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" class="form-control" id="" rows="5"><?= $description ?></textarea>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-info text-white btn-lg mt-2 w-100"> Edit Product</button>
                    </div>

                </form>
            </div>

        </div>






    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>