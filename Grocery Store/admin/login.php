<?php
    require_once "./includes/db_conn.php";

    if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['submit'] == "login") {

        $email = $_POST['email'];
        $password = $_POST['password'];

       // verify inputs are correct ?

       if($email == "" || $password == ""){
        die("all fields are required");
       }

        // verify user is exist ?
        $sel_sql = "SELECT * FROM users WHERE email='$email' ";
        $exists = mysqli_query($con, $sel_sql);

        if(mysqli_num_rows($exists) === 0 ) {
            die("invalid credentials");
        }

        // if user exists then verify its password is correct ?
        $user = mysqli_fetch_assoc($exists);

        if($password === $user['password']) {
            die("invalid credentials");
        }

        session_start();

        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $user['id'];

        header("Location:index.php");

    }



?>


<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href=""> <h4>Login</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" requird>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" name="submit" value="login">login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>
</body>
</html>