
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="./css/signup.css">
    <?php require_once("./includes/css-links.php") ?>
</head>
<body>
<div class="container mt-5 p-5">


<?php
                    
                    session_start();
                      
                        if (!empty($_SESSION['error'])) {
                            $msg = $_SESSION['error'];
                            echo " <div class='col-lg-8 offset-2 alert alert-danger alert-dismissible fade show credErr'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button> <strong>Warning! </strong> $msg</div>";
                        }
                        unset($_SESSION['error']);
    
    
                        if (!empty($_SESSION['invalid'])) {
                            $msg = $_SESSION['invalid'];
                            echo " <div class='col-lg-8 offset-2 alert alert-danger alert-dismissible fade show credErr'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button> <strong>Warning! </strong> $msg</div>";
                        }
                        unset($_SESSION['invalid']);
    
                    
                        
                        ?>
                      

<!-- view categories container -->
<div class="mt-5 offset-2 col-lg-8 bg-white shadow p-4">
<div class="offset-4 col-lg-4 mb-4">
                <label for=""></label>

                <button class="btn btn-info text-white btn-lg mt-2 w-100"> Registration Form</button>
            </div>

            

    
    <div class="form-container">
        <form action="./signin-query.php" method="POST" enctype="multipart/form-data" class="row">

           

            <div class="col-lg-6 mb-2">
                <label class="form-label" for="email">Email <span class="text-danger">*</span>
                </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter here..." required>
            </div>



            <div class="col-lg-6 mb-2">
                <label class="form-label" for="password">Password <span class="text-danger">*</span>
                </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter here..." required>
            </div>



            

            <div class="offset-4 col-lg-4 mb-2">
                <label for=""></label>

                <button class="btn btn-info text-white btn-lg mt-2 w-100"  name="submit" value="signin">SignIn</button>
            </div>
            <div class="offset-4 col-lg-4 mb-2">
        <p>Not registered?<a href="./signup-form.php">Signup</a></p>        
        </div>


        </form>
    </div>

</div>






</div> <!--*** Main wrapper end *****-->

  <!-- javascript links include -->
  <?php require_once("./includes/javascript-links.php")  ?>


</body>
</html>

