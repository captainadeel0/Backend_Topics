
<?php
session_start();
require_once "./db-con.php";

if (!isset($_SESSION['login'])  || $_SESSION['login'] == false) {
    header("location: login.php");
}

$sel_sql = "SELECT * FROM users WHERE id='$_SESSION[user_id]' ";
$exists = mysqli_query($con, $sel_sql);


$row = mysqli_fetch_assoc($exists);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile - Ogani</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body">

        <div class="container-fluid mt-3">

        <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="./images/adeel.jpg"  width="80" height="90" alt="">
                                    <div class="media-body ms-5">
                                        <h3 class="mb-0"><?= $row['name']?></h3>
                                        <p class="text-muted mb-0"><?= $row['role']?></p>
                                    </div>
                                </div>
                                
                               
                           

                                <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm <span><?= $row['name']?></span>, has been the industry standard dummy text ever since the 1500s.</p>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong>  <?= $row['email'] ?></span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                 
k                                </form>
                            </div>
                        </div>

                       

        </div>

        </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>
</body>

</html>