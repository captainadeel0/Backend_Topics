<?php

session_start();

    require_once "./db-con.php";

    if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['submit'] == "signin") {

        $email = $_POST['email'];
        $password = $_POST['password'];

    

       // verify inputs are correct ?

       if($email == "" || $password == ""){
        $_SESSION['error'] = "Warning! All feilds are requireds...";
        header("Location:signin-form.php");
        exit;
       }

        // verify user is exist ?
        $sel_sql = "SELECT * FROM customers WHERE email='$email' ";
        $exists = mysqli_query($con, $sel_sql);

        if(mysqli_num_rows($exists) === 0 ) {

            $_SESSION['error'] = "Invalid credentials ...!";
            header("Location:signin-form.php");
            exit;
            
        }

        
        // if user exists then verify its password is correct ?
        $user = mysqli_fetch_assoc($exists);

        if($password !== $user['password']) {
            $_SESSION['error'] = "Invalid credentials ...!";
            header("Location:signin-form.php");
            exit;        }
        


        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $user['id'];

        header("Location:index.php");

    }



?>