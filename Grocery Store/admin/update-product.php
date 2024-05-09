<?php
require_once("./auth.php");

require_once("./db-con.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
  $name = $_POST['name'];
  $unit_price = $_POST['unit_price'];
  $category = $_POST['category_id'];
  $quantity = $_POST['quantity'];
  $description = $_POST['description'];
  
  

  
  if (empty($_FILES['new_image']['image'])) {
    $image = $_POST['old_image'];
} else {
    $data = uploadImage("products", $_FILES['new_image'], 3, "products");

    if ($data['errors'] === false) {
        $image = $data['result'];
    }
}

  

    $query = "UPDATE `products` SET `name`='$name', `unit_price`='$unit_price', `category_id`='$category', `quantity`='$quantity', `description`='$description', `image`='$image' WHERE `id`='$id'";

    if (mysqli_query($con, $query)) {

        $_SESSION['success'] = "Category has been added successfully...!";
        header("Location:products.php");
    } else {
        $_SESSION['error'] = "Category has not been updated...!";
        header("Location:products.php");
    }
}


