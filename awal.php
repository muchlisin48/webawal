<?php
include 'koneksi.php'
?>
<?php
if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE tahun='$tahun'");

    if ($tahun != null) {
        $tahun_kurang = $tahun - 1;
        //tahun ini
        $januari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' and tahun='$tahun'");
        $februari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' and tahun='$tahun'");
        $maret = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' and tahun='$tahun'");
        $april = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' and tahun='$tahun'");
        $mei = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' and tahun='$tahun'");
        $juni = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' and tahun='$tahun'");
        $juli = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' and tahun='$tahun'");
        $agustus = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' and tahun='$tahun'");
        $september = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' and tahun='$tahun'");
        $oktober = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' and tahun='$tahun'");
        $november = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun'");
        $desember = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun'");

        $jan2 = mysqli_fetch_array($januari);
        $feb2 = mysqli_fetch_array($februari);
        $mar2 = mysqli_fetch_array($maret);
        $apr2 = mysqli_fetch_array($april);
        $mei2 = mysqli_fetch_array($mei);
        $jun2 = mysqli_fetch_array($juni);
        $jul2 = mysqli_fetch_array($juli);
        $ags2 = mysqli_fetch_array($agustus);
        $sep2 = mysqli_fetch_array($september);
        $okt2 = mysqli_fetch_array($oktober);
        $nov2 = mysqli_fetch_array($november);
        $des2 = mysqli_fetch_array($desember);
        //tahun kurang

        $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun_kurang'");
        $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun_kurang'");

        $nov3 = mysqli_fetch_array($november1);
        $des3 = mysqli_fetch_array($desember1);
    }
    if ($tahun == '0') {
        $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");
        $januari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' ");
        $februari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' ");
        $maret = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' ");
        $april = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' ");
        $mei = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' ");
        $juni = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' ");
        $juli = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' ");
        $agustus = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' ");
        $september = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' ");
        $oktober = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' ");
        $november = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' ");
        $desember = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' ");
        $jan2 = mysqli_fetch_array($januari);
        $feb2 = mysqli_fetch_array($februari);
        $mar2 = mysqli_fetch_array($maret);
        $apr2 = mysqli_fetch_array($april);
        $mei2 = mysqli_fetch_array($mei);
        $jun2 = mysqli_fetch_array($juni);
        $jul2 = mysqli_fetch_array($juli);
        $ags2 = mysqli_fetch_array($agustus);
        $sep2 = mysqli_fetch_array($september);
        $okt2 = mysqli_fetch_array($oktober);
        $nov2 = mysqli_fetch_array($november);
        $des2 = mysqli_fetch_array($desember);

        $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November'");
        $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember'");

        $nov3 = mysqli_fetch_array($november1);
        $des3 = mysqli_fetch_array($desember1);
    }
} else {
    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");
    $januari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' ");
    $februari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' ");
    $maret = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' ");
    $april = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' ");
    $mei = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' ");
    $juni = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' ");
    $juli = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' ");
    $agustus = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' ");
    $september = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' ");
    $oktober = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' ");
    $november = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' ");
    $desember = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' ");
    $jan2 = mysqli_fetch_array($januari);
    $feb2 = mysqli_fetch_array($februari);
    $mar2 = mysqli_fetch_array($maret);
    $apr2 = mysqli_fetch_array($april);
    $mei2 = mysqli_fetch_array($mei);
    $jun2 = mysqli_fetch_array($juni);
    $jul2 = mysqli_fetch_array($juli);
    $ags2 = mysqli_fetch_array($agustus);
    $sep2 = mysqli_fetch_array($september);
    $okt2 = mysqli_fetch_array($oktober);
    $nov2 = mysqli_fetch_array($november);
    $des2 = mysqli_fetch_array($desember);

    $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November'");
    $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember'");

    $nov3 = mysqli_fetch_array($november1);
    $des3 = mysqli_fetch_array($desember1);
}

?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <!-- theme meta -->
    <meta name="theme-name" content="orbitor" />

    <title>Orbitor - Software Company Template</title>

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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js" integrity="sha512-Tfw6etYMUhL4RTki37niav99C6OHwMDB2iBT5S5piyHO+ltK2YX8Hjy9TXxhE1Gm/TmAV0uaykSpnHKFIAif/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>

<body>



    <nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <h2>Astra Motor</h2>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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


    <!-- Slider Start -->
    <section class="banner d-flex align-items-center">
        <div class="banner-img-part"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-xl-8">
                    <div class="block">
                        <h1 class="mb-3 mt-3">Mari Kembangkan Masa Depan Bersama!</h1>
                        <p class="mb-5">Fondasi kami, idemu, bersama-sama kita maju dan berkembang untuk menciptakan masa depan bersama.
                        </p>

                        <a href="about.html" target="_blank" class="btn btn-main">Learn more about Digicon<i class="fa fa-angle-right ml-2"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container-fluid p-5 btn text-white text-center">
            <h1>Grafik</h1>
        </div>
        <div class="container">
            <div class="row">

                <script>
                    //tahun ini
                    var jum_jan = <?php echo $jan2['jumlah'] ?>;
                    var kpb1_jan = <?php echo $jan2['kpb1'] ?>;
                    var jum_feb = <?php echo $feb2['jumlah'] ?>;
                    var kpb1_feb = <?php echo $feb2['kpb1'] ?>;
                    var jum_mar = <?php echo $mar2['jumlah'] ?>;
                    var kpb1_mar = <?php echo $mar2['kpb1'] ?>;
                    var jum_apr = <?php echo $apr2['jumlah'] ?>;
                    var kpb1_apr = <?php echo $apr2['kpb1'] ?>;
                    var jum_mei = <?php echo $mei2['jumlah'] ?>;
                    var kpb1_mei = <?php echo $mei2['kpb1'] ?>;
                    var jum_jun = <?php echo $jun2['jumlah'] ?>;
                    var kpb1_jun = <?php echo $jun2['kpb1'] ?>;
                    var jum_jul = <?php echo $jul2['jumlah'] ?>;
                    var kpb1_jul = <?php echo $jul2['kpb1'] ?>;
                    var jum_ags = <?php echo $ags2['jumlah'] ?>;
                    var kpb1_ags = <?php echo $ags2['kpb1'] ?>;
                    var jum_sep = <?php echo $sep2['jumlah'] ?>;
                    var kpb1_sep = <?php echo $sep2['kpb1'] ?>;
                    var jum_okt = <?php echo $okt2['jumlah'] ?>;
                    var kpb1_okt = <?php echo $okt2['kpb1'] ?>;
                    var jum_nov = <?php echo $nov2['jumlah'] ?>;
                    var kpb1_nov = <?php echo $nov2['kpb1'] ?>;
                    var jum_des = <?php echo $des2['jumlah'] ?>;
                    var kpb1_des = <?php echo $des2['kpb1'] ?>;

                    //tahun kemarin

                    var jum_nov1 = <?php echo $nov3['jumlah'] ?>;
                    var kpb1_nov1 = <?php echo $nov3['kpb1'] ?>;
                    var jum_des1 = <?php echo $des3['jumlah'] ?>;
                    var kpb1_des1 = <?php echo $des3['kpb1'] ?>;

                    var hasil_jan = +Math.round(kpb1_jan / jum_nov1 * 100);
                    var hasil_feb = +Math.round(kpb1_feb / jum_des1 * 100);
                    var hasil_mart = +Math.round(kpb1_mar / jum_jan * 100);
                    var hasil_april = +Math.round(kpb1_apr / jum_feb * 100);
                    var hasil_mei = +Math.round(kpb1_mei / jum_mar * 100);
                    var hasil_juni = +Math.round(kpb1_jun / jum_apr * 100);
                    var hasil_juli = +Math.round(kpb1_jul / jum_mei * 100);
                    var hasil_ags = +Math.round(kpb1_ags / jum_jun * 100);
                    var hasil_sep = +Math.round(kpb1_sep / jum_jul * 100);
                    var hasil_okt = +Math.round(kpb1_okt / jum_ags * 100);
                    var hasil_nov = +Math.round(kpb1_nov / jum_sep * 100);
                    var hasil_des = +Math.round(kpb1_des / jum_okt * 100);




                    // document.write("" + Math.round(hasil_mart));
                </script>
                <!-- awal form pemilihan tahun -->
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">

                    <select name="tahun" class="dropdown-toggle">
                        <option value="0">Semua</option>
                        <?php
                        include "koneksi.php";
                        //query menampilkan nama unit kerja ke dalam combobox
                        $query    = mysqli_query($koneksi, "SELECT * FROM db_astra GROUP BY tahun ORDER BY tahun");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <option value="<?= $data['tahun']; ?>" name="kotapilih"><?php echo $data['tahun']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value="Pilih" class="btn btn-main">
                    <a href="./">Refresh</a>
                </form>
                <!-- akhir form pemilihan tahun -->

                <!-- start Chard-->
                <div class="chart-container" style="position: relative; height:80vh; width:70vw">
                    <canvas id="myChart"></canvas>
                    <h3></h3>
                    <a href="contact.html" class="btn btn-solid-border d-none d-lg-block">Data <i class="fa fa-angle-right ml-2"></i></a>
                </div>

                <script>
                    const labels = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', ];
                    const data = {
                        labels: labels,
                        datasets: [{
                                label: 'KPB1',
                                backgroundColor: 'rgb(255, 99, 132)', //warna titik
                                borderColor: 'rgb(255, 99, 132)', // warna garis
                                data: [hasil_jan, hasil_feb, hasil_mart, hasil_april, hasil_mei, hasil_juni, hasil_juli, hasil_ags, hasil_sep, hasil_okt, hasil_nov, hasil_des], //nilai dari chard
                            },

                        ]
                    };
                    const config = {
                        type: 'line',
                        data: data,
                        plugins: [ChartDataLabels],
                        options: {}
                    };

                    // === include 'setup' then 'config' above ===

                    var myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                </script>
                <!-- end Chard-->
            </div>
        </div>
    </section>
    <hr>
    <section class="section process">
        <div class="container">
            <div class="row align-items-center">
                <!-- slide bar filosofi, visi misi -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="text-center">
                                <h5>Filosofi</h5>
                            </div>
                            <img class="d-block w-100" src="gambar/filosofi.jpg" alt="First slide">

                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <h5>Visi</h5>
                            </div>
                            <img class="d-block w-100" src="gambar/visi.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="text-center">
                                <h5>Misi</h5>
                            </div>
                            <img class="d-block w-100" src="gambar/misi.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- end slide bar filosofi, visi misi -->
            </div>
        </div>
    </section>

    <!-- footer Start -->
    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <h3>Orbitor</h3>
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Company</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Support</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-4">Get in Touch</h4>
                        <h6><a href="tel:+23-345-67890"> <i class="ti-headphone-alt mr-3"></i>Support@megakit.com</a></h6>
                        <h6><a href="mailto:support@gmail.com"> <i class="ti-mobile mr-3"></i>+23-456-6588</a></h6>

                        <ul class="list-inline footer-socials mt-5">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">Orbitor</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <script src="plugins/modal-video/modal-video.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="js/script.js"></script>

</body>

</html>