<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="post">
        <label for="">Username</label>
        <input type="text" name="userid"><br>

        <label for="">Password</label>
        <input type="password" name="password"><br>

        <button name="login" type="submit">login</button>
        Belum Memiliki Akun? <a href="register.php">register</a>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $uname = $_POST['userid'];
        $password = $_POST['password'];

        $query = $koneksi->query("SELECT * FROM tb_data WHERE userid = '$uname' AND password = '$password'");
        $result = mysqli_num_rows($query);

        if ($result == 1) {
            $data = $query->fetch_assoc();

            $_SESSION['user'] = $data;
            echo "<script>alert('berhasil!');window.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Login gagal!');window.location = 'login.php';</script>";
        }
    }
    ?>

</body>

</html>