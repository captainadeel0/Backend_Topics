<?php

// db connection

require_once "./db-con.php";
require_once "./admin/includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

       
            $query = "INSERT INTO `customers`(`name`, `email`, `password`, `mobile`, `address`) 
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]', $_POST[mobile],'$_POST[address]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:signin-form.php");
            }
            else{
                echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
            }
        }
        else{ 
            
          echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";

        }

    exit;



?>