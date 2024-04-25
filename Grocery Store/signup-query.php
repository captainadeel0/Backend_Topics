<?php

// db connection

require_once "./db-con.php";
require_once "./admin/includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

        // upload image
        $data = uploadImage("users", $_FILES['image']);

        if ($data['errors'] === false) {
            // save info into db
            $name = $data['result'];

            // echo $name;
            // exit;

            $query = "INSERT INTO `customers`(`name`, `email`, `password`, `image`, `mobile`, `address`) 
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]','$_POST[image]',$_POST[mobile],'$_POST[address]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:index.php");
            }
            else{
                echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
            }
        }
        else{
            
          echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";

        }

    exit;
}


?>