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
        //tahun kurang
        $januari1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' and tahun='$tahun_kurang'");
        $februari1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' and tahun='$tahun_kurang'");
        $maret1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' and tahun='$tahun_kurang'");
        $april1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' and tahun='$tahun_kurang'");
        $mei1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' and tahun='$tahun_kurang'");
        $juni1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' and tahun='$tahun_kurang'");
        $juli1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' and tahun='$tahun_kurang'");
        $agustus1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' and tahun='$tahun_kurang'");
        $september1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' and tahun='$tahun_kurang'");
        $oktober1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' and tahun='$tahun_kurang'");
        $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun_kurang'");
        $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun_kurang'");

        $resultjan = mysqli_num_rows($januari);
        if ($resultjan == 1) {
            $jan2 = mysqli_fetch_array($januari); ?>
            <script>
                var jum_jan = <?php echo $jan2['jumlah'] ?>;
                var kpb1_jan = <?php echo $jan2['kpb1'] ?>;
                var kpb2_jan = <?php echo $jan2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jan = 0;
                var kpb1_jan = 0;
                var kpb2_jan = 0;
            </script>
        <?php
        }
        $resultjan1 = mysqli_num_rows($januari1);
        if ($resultjan1 == 1) {
            $jan3 = mysqli_fetch_array($januari1); ?>
            <script>
                var jum_jan1 = <?php echo $jan3['jumlah'] ?>;
                var kpb1_jan1 = <?php echo $jan3['kpb1'] ?>;
                var kpb2_jan1 = <?php echo $jan3['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jan1 = 0;
                var kpb1_jan1 = 0;
                var kpb2_jan1 = 0;
            </script>
        <?php
        }

        $resultfeb = mysqli_num_rows($februari);
        if ($resultfeb == 1) {
            $feb2 = mysqli_fetch_array($februari); ?>
            <script>
                var jum_feb = <?php echo $feb2['jumlah'] ?>;
                var kpb1_feb = <?php echo $feb2['kpb1'] ?>;
                var kpb2_feb = <?php echo $feb2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_feb = 0;
                var kpb1_feb = 0;
                var kpb2_feb = 0;
            </script>
        <?php
        }

        $resultmar = mysqli_num_rows($maret);
        if ($resultmar == 1) {
            $mar2 = mysqli_fetch_array($maret); ?>
            <script>
                var jum_mar = <?php echo $mar2['jumlah'] ?>;
                var kpb1_mar = <?php echo $mar2['kpb1'] ?>;
                var kpb2_mar = <?php echo $mar2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mar = 0;
                var kpb1_mar = 0;
                var kpb2_mar = 0;
            </script>
        <?php
        }

        $resultapr = mysqli_num_rows($april);
        if ($resultapr == 1) {
            $apr2 = mysqli_fetch_array($april); ?>
            <script>
                var jum_apr = <?php echo $apr2['jumlah'] ?>;
                var kpb1_apr = <?php echo $apr2['kpb1'] ?>;
                var kpb2_apr = <?php echo $apr2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_apr = 0;
                var kpb1_apr = 0;
                var kpb2_apr = 0;
            </script>
        <?php
        }

        $resultmei = mysqli_num_rows($mei);
        if ($resultmei == 1) {
            $mei2 = mysqli_fetch_array($mei); ?>
            <script>
                var jum_mei = <?php echo $mei2['jumlah'] ?>;
                var kpb1_mei = <?php echo $mei2['kpb1'] ?>;
                var kpb2_mei = <?php echo $mei2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mei = 0;
                var kpb1_mei = 0;
                var kpb2_mei = 0;
            </script>
        <?php
        }

        $resultjun = mysqli_num_rows($juni);
        if ($resultjun == 1) {
            $jun2 = mysqli_fetch_array($juni); ?>
            <script>
                var jum_jun = <?php echo $jun2['jumlah'] ?>;
                var kpb1_jun = <?php echo $jun2['kpb1'] ?>;
                var kpb2_jun = <?php echo $jun2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jun = 0;
                var kpb1_jun = 0;
                var kpb1_jun = 0;
            </script>
        <?php
        }

        $resultjul = mysqli_num_rows($juli);
        if ($resultjul == 1) {
            $jul2 = mysqli_fetch_array($juli); ?>
            <script>
                var jum_jul = <?php echo $jul2['jumlah'] ?>;
                var kpb1_jul = <?php echo $jul2['kpb1'] ?>;
                var kpb2_jul = <?php echo $jul2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jul = 0;
                var kpb1_jul = 0;
                var kpb1_jul = 0;
            </script>
        <?php
        }

        $resultags = mysqli_num_rows($agustus);
        if ($resultags == 1) {
            $ags2 = mysqli_fetch_array($agustus); ?>
            <script>
                var jum_ags = <?php echo $ags2['jumlah'] ?>;
                var kpb1_ags = <?php echo $ags2['kpb1'] ?>;
                var kpb2_ags = <?php echo $ags2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_ags = 0;
                var kpb1_ags = 0;
                var kpb2_ags = 0;
            </script>
        <?php
        }

        $resultsep = mysqli_num_rows($september);
        if ($resultsep == 1) {
            $sep2 = mysqli_fetch_array($september); ?>
            <script>
                var jum_sep = <?php echo $sep2['jumlah'] ?>;
                var kpb1_sep = <?php echo $sep2['kpb1'] ?>;
                var kpb2_sep = <?php echo $sep2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_sep = 0;
                var kpb1_sep = 0;
                var kpb1_sep = 0;
            </script>
        <?php
        }
        $resultsep1 = mysqli_num_rows($september1);
        if ($resultsep1 == 1) {
            $sep3 = mysqli_fetch_array($september1); ?>
            <script>
                var jum_sep1 = <?php echo $sep3['jumlah'] ?>;
                var kpb1_sep1 = <?php echo $sep3['kpb1'] ?>;
                var kpb2_sep1 = <?php echo $sep3['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_sep1 = 0;
                var kpb1_sep1 = 0;
                var kpb2_sep1 = 0;
            </script>
        <?php
        }

        $resultokt = mysqli_num_rows($oktober);
        if ($resultokt == 1) {
            $okt2 = mysqli_fetch_array($oktober); ?>
            <script>
                var jum_okt = <?php echo $okt2['jumlah'] ?>;
                var kpb1_okt = <?php echo $okt2['kpb1'] ?>;
                var kpb2_okt = <?php echo $okt2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_okt = 0;
                var kpb1_okt = 0;
                var kpb2_okt = 0;
            </script>
        <?php
        }
        $resultokt1 = mysqli_num_rows($oktober1);
        if ($resultokt1 == 1) {
            $okt3 = mysqli_fetch_array($oktober1); ?>
            <script>
                var jum_oct1 = <?php echo $okt3['jumlah'] ?>;
                var kpb1_oct1 = <?php echo $okt3['kpb1'] ?>;
                var kpb2_oct1 = <?php echo $okt3['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_oct1 = 0;
                var kpb1_oct1 = 0;
                var kpb2_oct1 = 0;
            </script>
        <?php
        }

        $resultnov = mysqli_num_rows($november);
        if ($resultnov == 1) {
            $nov2 = mysqli_fetch_array($november); ?>
            <script>
                var jum_nov = <?php echo $nov2['jumlah'] ?>;
                var kpb1_nov = <?php echo $nov2['kpb1'] ?>;
                var kpb2_nov = <?php echo $nov2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_nov = 0;
                var kpb1_nov = 0;
                var kpb2_nov = 0;
            </script>
        <?php
        }

        $resultdes = mysqli_num_rows($desember);
        if ($resultdes == 1) {
            $des2 = mysqli_fetch_array($desember); ?>
            <script>
                var jum_des = <?php echo $des2['jumlah'] ?>;
                var kpb1_des = <?php echo $des2['kpb1'] ?>;
                var kpb2_des = <?php echo $des2['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_des = 0;
                var kpb1_des = 0;
                var kpb2_des = 0;
            </script>
        <?php
        }

        $resultnov1 = mysqli_num_rows($november1);
        if ($resultnov1 == 1) {
            $nov3 = mysqli_fetch_array($november1); ?>
            <script>
                var jum_nov1 = <?php echo $nov3['jumlah'] ?>;
                var kpb1_nov1 = <?php echo $nov3['kpb1'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_nov1 = 0;
                var kpb1_nov1 = 0;
            </script>
        <?php
        }

        $resultdes1 = mysqli_num_rows($desember1);
        if ($resultdes1 == 1) {
            $des3 = mysqli_fetch_array($desember1); ?>
            <script>
                var jum_des1 = <?php echo $des3['jumlah'] ?>;
                var kpb1_des1 = <?php echo $des3['kpb1'] ?>;
                var kpb2_des1 = <?php echo $des3['kpb2'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_des1 = 0;
                var kpb1_des1 = 0;
                var kpb2_des1 = 0;
            </script>
        <?php
        }
    }
    if ($tahun == '0') {
        $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");
        $januari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Januari' ");
        $februari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Februari' ");
        $maret = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Maret' ");
        $april = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='April' ");
        $mei = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Mei' ");
        $juni = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juni' ");
        $juli = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juli' ");
        $agustus = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Agustus' ");
        $september = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='September' ");
        $oktober = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Oktober' ");
        $november = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='November' ");
        $desember = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Desember' ");

        $november1 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='November'");
        $desember1 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Desember'");

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

        $nov3 = mysqli_fetch_array($november1);
        $des3 = mysqli_fetch_array($desember1);

        ?>
        <script>
            var jum_jan = <?php echo $jan2['semua'] ?>;
            var kpb1_jan = <?php echo $jan2['kb1'] ?>;
            var jum_feb = <?php echo $feb2['semua'] ?>;
            var kpb1_feb = <?php echo $feb2['kb1'] ?>;
            var jum_mar = <?php echo $mar2['semua'] ?>;
            var kpb1_mar = <?php echo $mar2['kb1'] ?>;
            var jum_apr = <?php echo $apr2['semua'] ?>;
            var kpb1_apr = <?php echo $apr2['kb1'] ?>;
            var jum_mei = <?php echo $mei2['semua'] ?>;
            var kpb1_mei = <?php echo $mei2['kb1'] ?>;
            var jum_jun = <?php echo $jun2['semua'] ?>;
            var kpb1_jun = <?php echo $jun2['kb1'] ?>;
            var jum_jul = <?php echo $jul2['semua'] ?>;
            var kpb1_jul = <?php echo $jul2['kb1'] ?>;
            var jum_ags = <?php echo $ags2['semua'] ?>;
            var kpb1_ags = <?php echo $ags2['kb1'] ?>;
            var jum_sep = <?php echo $sep2['semua'] ?>;
            var kpb1_sep = <?php echo $sep2['kb1'] ?>;
            var jum_okt = <?php echo $okt2['semua'] ?>;
            var kpb1_okt = <?php echo $okt2['kb1'] ?>;
            var jum_nov = <?php echo $nov2['semua'] ?>;
            var kpb1_nov = <?php echo $nov2['kb1'] ?>;
            var jum_des = <?php echo $des2['semua'] ?>;
            var kpb1_des = <?php echo $des2['kb1'] ?>;

            //tahun kemarin

            var jum_nov1 = <?php echo $nov3['semua'] ?>;
            var kpb1_nov1 = <?php echo $nov3['kb1'] ?>;
            var jum_des1 = <?php echo $des3['semua'] ?>;
            var kpb1_des1 = <?php echo $des3['kb1'] ?>;
        </script>
    <?php


    }
} else {
    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");
    $januari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Januari' ");
    $februari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Februari' ");
    $maret = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Maret' ");
    $april = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='April' ");
    $mei = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Mei' ");
    $juni = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juni' ");
    $juli = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juli' ");
    $agustus = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Agustus' ");
    $september = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='September' ");
    $oktober = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Oktober' ");
    $november = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='November' ");
    $desember = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Desember' ");

    $november1 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='November'");
    $desember1 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Desember'");

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

    $nov3 = mysqli_fetch_array($november1);
    $des3 = mysqli_fetch_array($desember1);

    ?>
    <script>
        var jum_jan = <?php echo $jan2['semua'] ?>;
        var kpb1_jan = <?php echo $jan2['kb1'] ?>;
        var jum_feb = <?php echo $feb2['semua'] ?>;
        var kpb1_feb = <?php echo $feb2['kb1'] ?>;
        var jum_mar = <?php echo $mar2['semua'] ?>;
        var kpb1_mar = <?php echo $mar2['kb1'] ?>;
        var jum_apr = <?php echo $apr2['semua'] ?>;
        var kpb1_apr = <?php echo $apr2['kb1'] ?>;
        var jum_mei = <?php echo $mei2['semua'] ?>;
        var kpb1_mei = <?php echo $mei2['kb1'] ?>;
        var jum_jun = <?php echo $jun2['semua'] ?>;
        var kpb1_jun = <?php echo $jun2['kb1'] ?>;
        var jum_jul = <?php echo $jul2['semua'] ?>;
        var kpb1_jul = <?php echo $jul2['kb1'] ?>;
        var jum_ags = <?php echo $ags2['semua'] ?>;
        var kpb1_ags = <?php echo $ags2['kb1'] ?>;
        var jum_sep = <?php echo $sep2['semua'] ?>;
        var kpb1_sep = <?php echo $sep2['kb1'] ?>;
        var jum_okt = <?php echo $okt2['semua'] ?>;
        var kpb1_okt = <?php echo $okt2['kb1'] ?>;
        var jum_nov = <?php echo $nov2['semua'] ?>;
        var kpb1_nov = <?php echo $nov2['kb1'] ?>;
        var jum_des = <?php echo $des2['semua'] ?>;
        var kpb1_des = <?php echo $des2['kb1'] ?>;

        //tahun kemarin

        var jum_nov1 = <?php echo $nov3['semua'] ?>;
        var kpb1_nov1 = <?php echo $nov3['kb1'] ?>;
        var jum_des1 = <?php echo $des3['semua'] ?>;
        var kpb1_des1 = <?php echo $des3['kb1'] ?>;
    </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 1000px;
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

                <a href="logout.php" class="btn btn-solid-border d-none d-lg-block">Logout <i class="fa fa-angle-right ml-2"></i></a>
            </div>
        </div>
    </nav>
    <!--akhir navbar -->
    <script>
        //tahun ini

        //tahun kemarin

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

        //kpb2
        var hasil_jan1 = +Math.round(kpb2_jan / jum_sep1 * 100);
        var hasil_feb1 = +Math.round(kpb2_feb / jum_oct1 * 100);
        var hasil_mart1 = +Math.round(kpb2_mar / jum_nov1 * 100);
        var hasil_april1 = +Math.round(kpb2_apr / jum_des1 * 100);
        var hasil_mei1 = +Math.round(kpb2_mei / jum_jan * 100);
        var hasil_juni1 = +Math.round(kpb2_jun / jum_feb * 100);
        var hasil_juli1 = +Math.round(kpb2_jul / jum_mar * 100);
        var hasil_ags1 = +Math.round(kpb2_ags / jum_apr * 100);
        var hasil_sep1 = +Math.round(kpb2_sep / jum_mei * 100);
        var hasil_okt1 = +Math.round(kpb2_okt / jum_jun * 100);
        var hasil_nov1 = +Math.round(kpb2_nov / jum_jul * 100);
        var hasil_des1 = +Math.round(kpb2_des / jum_ags * 100);




        // document.write("" + Math.round(hasil_mart));
    </script>
    <!-- <div>
            <hasil_mart>
        </div> -->




    <div class="mx-auto">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <p>Select list:</p>
            <select name="tahun" style="width:160px;">
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
            <input type="submit" value="Pilih">
            <a href="./">Refresh</a>
        </form>

        <!-- start Chard-->
        <div class="chart-container" style="position: relative; height:50vh; width:70vw">
            <canvas id="myChart"></canvas>
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
                    {
                        label: 'KPB2',
                        backgroundColor: 'blue', //warna titik
                        borderColor: 'blue', // warna garis
                        data: [hasil_jan1, hasil_feb1, hasil_mart1, hasil_april1, hasil_mei1, hasil_juni1, hasil_juli1, hasil_ags1, hasil_sep1, hasil_okt1, hasil_nov1, hasil_des1], //nilai dari chard
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
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data keluar
            </div>
            <div class="card-body">
                <table class="table" style="text-align:center ;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Bulan</th>
                            <th scope="col">jumlah</th>
                            <th scope="col">kpb1</th>
                            <th scope="col">kpb2</th>
                            <th scope="col">kpb3</th>
                            <th scope="col">kpb4</th>
                            <th scope="col">Kota</th>
                        </tr>

                        <body>



                            <!-- menampilkan data php -->
                            <?php
                            $sql2 = "select * from db_astra";
                            $q2 = mysqli_query($koneksi, $sql2);
                            $urut = 1;
                            while ($r2 = mysqli_fetch_array($tamPeg)) {
                                $id     = $r2['id'];
                                $tahun_data = $r2['tahun'];
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
                                    <td scope="row"><?php echo $tahun_data ?></td>
                                    <td scope="row"><?php echo $bulan ?></td>
                                    <td scope="row"><?php echo $jumlah ?></td>
                                    <td scope="row"><?php echo $kpb1 ?> </td>
                                    <td scope="row"><?php echo $kpb2 ?> </td>
                                    <td scope="row"><?php echo $kpb3 ?> </td>
                                    <td scope="row"><?php echo $kpb4 ?> </td>
                                    <td scope="row"><?php echo $kota ?> </td>
                                    <td scope="row">
                                        <!-- <script>
                                            var angka1 = <?php echo $kpb1 ?>;
                                            var angka2 = <?php echo $jumlah ?>;
                                            var persen = angka1 / angka2 * 100;

                                            document.write("" + Math.round(persen) + "%");
                                        </script> -->
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

</body>

</html>