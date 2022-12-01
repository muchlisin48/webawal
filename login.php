<?php
session_start();
include 'koneksi.php';
if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE username='$usernameemail' or email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            echo header('location:index.php');
        } else {
            "<script>alert('Password Salah')</script>";
        }
    } else {
        echo
        "<script>alert('User Not Registered')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/modal-video/modal-video.css">
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- <h2>Login</h2>
    <form action="" method="post" autocomplete="off">
        <label for="usernameemail" class="form-label ">Username of Email</label>
        <input type="text" name="usernameemail" id="usernameemail" required value="" class="form-control"><br>

        <label for="password" class="form-label ">Password</label>
        <input type="text" name="password" id="password" required value="" class="form-control"><br>

        <button type="submit" name="submit" class="btn btn-outline-dark">Login</button>
    </form>
    <br>
    <a href="register.php">Register</a> -->

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="border border-3 border-primary"></div>
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <form class="mb-3 mt-md-4" action="" method="post" autocomplete="off">
                                <h2 class="fw-bold mb-2 text-uppercase ">Astra</h2>
                                <p class=" mb-5">Please enter your login and password!</p>
                                <div class="mb-3">
                                    <label for="usernameemail" class="form-label ">Username of Email</label>
                                    <input type="text" name="usernameemail" id="usernameemail" required value="" class="form-control"><br>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Password</label>
                                    <input type="password" name="password" id="password" required value="" class="form-control"><br>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="submit" class="btn btn-info">Login</button>
                                </div>
                            </form>
                            <!-- <div>
                                <p class="mb-0  text-center">Don't have an account? <a href="register.php" class="text-primary fw-bold">Sign
                                        Up</a></p>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>