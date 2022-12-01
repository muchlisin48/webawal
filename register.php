<?php
include 'koneksi.php';
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
    <!-- <h2>REGISTER</h2> -->
    <!-- <form method="post" autocomplete="off">
        <label for="" class="form-label ">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control"><br>

        <label for="" class="form-label ">Username</label>
        <input type="text" name="username" id="username" class="form-control"><br>

        <label for="" class="form-label ">Email</label>
        <input type="text" name="email" id="email" class="form-control"><br>

        <label for="" class="form-label ">Password</label>
        <input type="password" name="password" id="password" class="form-control"><br>

        <label for="" class="form-label ">Confrim Password</label>
        <input type="password" name="confrimpassword" id="confrimpassword" class="form-control"><br>

        <label for="" class="form-label ">Sebagai</label>
        <select name="sebagai" id="sebagai">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>


        <button name="daftar" type="submit">Register</button>
        sudah memiliki akun? <a href="login.php">login</a>

    </form> -->

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="border border-3 border-primary"></div>
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <form class="mb-3 mt-md-4" action="" method="post" autocomplete="off">
                                <h2 class="fw-bold mb-2 text-uppercase ">Astra</h2>
                                <h2 class="fw-bold mb-2 text-uppercase ">Register</h2>
                                
                                <div class="mb-3">
                                    <label for="" class="form-label ">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Confrim Password</label>
                                    <input type="password" name="confrimpassword" id="confrimpassword" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Sebagai</label>
                                    <select name="sebagai" id="sebagai">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="d-grid">
                                    <button name="daftar" type="submit" class="btn btn-info">Register</button>
                                </div>
                            </form>
                            <div>
                                <p class="mb-0  text-center">Have an account? <a href="login.php" class="text-primary fw-bold">LogIn
                                    </a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confrimpassword = $_POST['confrimpassword'];
        $sebagai = $_POST['sebagai'];

        $duplicate = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE username ='$username' OR email='$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo
            "<script>alert('Username or Email as Alreley Token')</script>";
        } else {
            if ($password == $confrimpassword) {
                $query = "INSERT INTO tb_data VALUE('', '$nama', '$username', '$email', '$password','$sebagai')";
                mysqli_query($koneksi, $query);
                echo

                "<script>alert('Registrasi Seccessful');window.location = 'login.php'; </script>";
            } else {
                echo
                "<script>alert('Password salah')</script>";
            }
        }

        // $query = $koneksi->query("INSERT INTO tb_data(nama, username, email, password, sebagai, kota)VALUE('$nama', '$username','$email', '$password', '$sebagai', '$kota' )");

        // if ($query) {
        //     echo "<script>alert('Registrasi Berhasil!');window.location = 'register.php';</script>";
        // } else {
        //     echo "<script>alert('Registrasi Gagal!');window.location = 'register.php';</script>";
        // }
    }
    ?>

</body>

</html>