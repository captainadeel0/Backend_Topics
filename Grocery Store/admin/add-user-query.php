<?php

// db connection

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

        // upload image
        $data = uploadImage("users", $_FILES['image']);

        if ($data['errors'] === false) {
            // save info into db
            $name = $data['result'];

            echo $name;
            // exit;
            

            $query = "INSERT INTO `users`(`name`, `email`, `password`, `image`, `mobile`, `address`, `description`) 
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]','$name',$_POST[mobile],'$_POST[address]', '$_POST[description]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:view-user.php");
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