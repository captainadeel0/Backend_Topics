<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/signup.css">
    <?php require_once("./includes/css-links.php") ?>
</head>
<body>
<div class="container   p-3">




<!-- view categories container -->
<div class=" bg-white mt-5 offset-2 col-lg-8  shadow p-4">
<div class="offset-4 col-lg-4 mb-3">
                <label for=""></label>

                <button class="btn btn-info text-white btn-lg mt-2 w-100"> Registration Form</button>
            </div>

            

    
    <div class="form-container">
        <form action="./signup-query.php" method="POST" enctype="multipart/form-data" class="row">

            <div class="col-lg-6 mb-2">
                <label class="form-label" for="name">Full Name <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter here..." required>
            </div>


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


            <div class="col-lg-6 mb-2">
                <label class="form-label" for="image">Mobile.No <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter here..." required>
            </div>


            <div class="col-lg-12 mb-2">
                <label class="form-label" for="address">Address <span class="text-danger">*</span>
                </label>
               <input type="text" class="form-control" name="address" id="address" placeholder="Enter here..." required>
            </div>

           
            <div class="offset-4 col-lg-4 mb-2">
                <label for=""></label>

                <button class="btn btn-info text-white btn-lg mt-2 w-100">Signup</button>
            </div>
            <div class="offset-4 col-lg-4 mb-2">
        <p>Already have an account! <a href="./signin-form.php"> Login</a></p>        
        </div>


        </form>
    </div>

</div>






</div> <!--*** Main wrapper end *****-->


</body>
</html>
