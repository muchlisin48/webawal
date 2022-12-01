<?php
include 'koneksi.php';
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi database");
}
$tanggal  = "";
$bulan = "";
$tahun = "";
$jumlah  = "";
$kpb1    = "";
$kpb2    = "";
$kpb3    = "";
$kpb4    = "";
$kota    = "";
$error   = "";
$sukses  = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delet') {
    $id = $_GET['id'];
    $sql1   = "delete from db_astra where id= '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
        $sukses = "berhasil hapus data";
    } else {
        $error = "gagal melakukan delet data";
    }
}

if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from db_astra where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $tanggal = isset($r1['tanggal']) ? $r1['tanggal'] : '';
    $bulan = isset($r1['bulan']) ? $r1['bulan'] : '';
    $tahun = isset($r1['tahun']) ? $r1['tahun'] : '';
    $jumlah = isset($r1['jumlah']) ? $r1['jumlah'] : '';
    $kpb1   = isset($r1['kpb1']) ? $r1['kpb1'] : '';
    $kpb2   = isset($r1['kpb2']) ? $r1['kpb2'] : '';
    $kpb3   = isset($r1['kpb3']) ? $r1['kpb3'] : '';
    $kpb4   = isset($r1['kpb4']) ? $r1['kpb4'] : '';
    $kota   = isset($r1['kota']) ? $r1['kota'] : '';

    if ($jumlah == "") {
        $error = "data tidak ditemukan";
    }
}


if (isset($_POST['simpan'])) { //untuk create
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    $kpb1   = $_POST['kpb1'];
    $kpb2   = $_POST['kpb2'];
    $kpb3   = $_POST['kpb3'];
    $kpb4   = $_POST['kpb4'];
    $kota   = $_POST['kota'];

    if ($tahun && $jumlah && $kpb1 && $kpb2 && $kpb3 && $kpb4 && $kota) {
        if ($op == 'edit') { // update
            $sql1 = "update db_astra set tanggal = '$tanggal',bulan = '$bulan',tahun = '$tahun', jumlah = '$jumlah',kpb1 = '$kpb1',kpb2 = '$kpb2',kpb3 = '$kpb3',kpb4 = '$kpb4',kota ='$kota' where id ='$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "data berhasil di update";
            } else {
                $error = "data gagal di update";
            }
        } else { //untuk insert
            $sql1 = "insert into db_astra (tanggal,bulan,tahun, jumlah, kpb1, kpb2, kpb3, kpb4, kota) values('$tanggal','$bulan','$tahun','$jumlah','$kpb1','$kpb2','$kpb3','$kpb4','$kota')";
            $q1     = mysqli_query($koneksi, $sql1);

            if ($q1) {
                $sukses = "berhasil di input";
            } else {
                $error  = "gagal memasukan datra";
            }
        }
    } else {
        $error = "Silahkan masukan data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <!-- theme meta -->
    <meta name="theme-name" content="orbitor" />

    <title>Data Astra</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

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

    <style>
        .mx-auto {
            padding-top: 1vw;

        }

        .card {
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h2>Astra Motor</h2>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

                    <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>

                <a href="contact.html" class="btn btn-solid-border d-none d-lg-block">Get an estimate <i class="fa fa-angle-right ml-2"></i></a>
            </div>
        </div>
    </nav>
    <section class="section about">

        <div class="mx-auto">
            <!-- untuk memasukan data -->
            <div class="card">
                <div class="card-header text-center" style="align-items: center ;">
                    <h1> Create Data</h1>

                </div>

                <div class="card-body">
                    <!-- inputan error -->
                    <?php
                    if ($error) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error ?>
                        </div>
                    <?php
                        header("refresh:1;url=CRUD_Data.php");
                    }
                    ?>

                    <!-- inputan sukses -->
                    <?php
                    if ($sukses) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $sukses ?>
                        </div>
                    <?php
                        
                    }
                    ?>
                    <form action="" method="POST">

                        <div class="mb-3 row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" id="tanggal" onchange="cetakTanggal()" name="tanggal" value="<?php echo $tanggal ?>">
                            </div>
                        </div>

                        <div class=" mb-3 row">
                            <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bulan" name="bulan" value="<?php echo $bulan ?> " readonly>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun ?>" readonly>
                            </div>
                        </div>
                        <div class=" mb-3 row">
                            <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kpb1" class="col-sm-2 col-form-label">Kpb1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kpb1" name="kpb1" value="<?php echo $kpb1 ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kpb2" class="col-sm-2 col-form-label">Kpb2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kpb2" name="kpb2" value="<?php echo $kpb2 ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kpb3" class="col-sm-2 col-form-label">Kpb3</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kpb3" name="kpb3" value="<?php echo $kpb3 ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kpb4" class="col-sm-2 col-form-label">Kpb4</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kpb4" name="kpb4" value="<?php echo $kpb4 ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kota" name="kota">
                                    <option value="">Pilih Kota</option>
                                    <option value="Semarang" <?php if ($kota == "Semarang") echo "selected" ?>>Semarang</option>
                                    <option value="Demak" <?php if ($kota == "Demak") echo "selected" ?>>Demak</option>
                                    <option value="Kudus" <?php if ($kota == "Kudus") echo "selected" ?>>Kudus</option>
                                    <option value="Jepara" <?php if ($kota == "Jepara") echo "selected" ?>>Jepara</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

            <!-- untuk mengeluarkan data -->
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    <h1 class="text-center text-white">Data</h1>
                </div>
                <div class="card-body">
                    <table class="table" style="text-align:center ;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">jumlah</th>
                                <th scope="col">kpb1</th>
                                <th scope="col">kpb2</th>
                                <th scope="col">kpb3</th>
                                <th scope="col">kpb4</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Aksi</th>
                            </tr>

                            <body>
                                <!-- menampilkan data php -->
                                <?php
                                $sql2 = "select * from db_astra";
                                $q2 = mysqli_query($koneksi, $sql2);
                                $urut = 1;
                                while ($r2 = mysqli_fetch_array($q2)) {
                                    $id     = $r2['id'];
                                    $tanggal = $r2['tanggal'];
                                    $bulan = $r2['bulan'];
                                    $jumlah = $r2['jumlah'];
                                    $kpb1   = $r2['kpb1'];
                                    $kpb2   = $r2['kpb2'];
                                    $kpb3   = $r2['kpb3'];
                                    $kpb4   = $r2['kpb4'];
                                    $kota   = $r2['kota'];
                                ?>
                                    <tr>

                                        <th scope="row"><?php echo $urut++ ?></th>
                                        <td scope="row"><?php echo $tanggal ?></td>
                                        <td scope="row"><?php echo $bulan ?></td>
                                        <td scope="row"><?php echo $jumlah ?></td>
                                        <td scope="row"><?php echo $kpb1 ?> </td>
                                        <td scope="row"><?php echo $kpb2 ?> </td>
                                        <td scope="row"><?php echo $kpb3 ?> </td>
                                        <td scope="row"><?php echo $kpb4 ?> </td>
                                        <td scope="row"><?php echo $kota ?> </td>

                                        <td scope="row">
                                            <a href="CRUD_Data.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">edit</button></a>
                                            <a href="CRUD_Data.php?op=delet&id=<?php echo $id ?>" onclick="return confirm('yakin ingin hapus')"><button type=" button" class="btn btn-danger">delete</button></a>

                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </body>
                        </thead>
                    </table>

                </div>
            </div>

        </div>
    </section>

</body>

</html>
<!-- membagi tanggal dan tahun dan masuk ke value secara otomatis js script -->
<script>
    function cetakTanggal() {
        var tanggal = document.querySelector('#tanggal').value;
        switch (tanggal.split('-')[1]) {
            case '01':
                bulan = 'Januari';
                break;
            case '02':
                bulan = 'Februari';
                break;
            case '03':
                bulan = 'Maret';
                break;
            case '04':
                bulan = 'April';
                break;
            case '05':
                bulan = 'Mei';
                break;
            case '06':
                bulan = 'Juni';
                break;
            case '07':
                bulan = 'Juli';
                break;
            case '08':
                bulan = 'Agustus';
                break;
            case '09':
                bulan = 'September';
                break;
            case '10':
                bulan = 'Oktober';
                break;
            case '11':
                bulan = 'November';
                break;
            case '12':
                bulan = 'Desember';
                break;

            default:
                bulan = 'Tidak diketahui';
                break;
        }
        document.querySelector('#bulan').value = bulan;
        document.querySelector('#tahun').value = tanggal.split('-')[0];
    }
</script>