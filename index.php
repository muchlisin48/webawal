<?php
session_start();
include 'koneksi.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE id='$id'");
    $row =  mysqli_fetch_assoc($result);
    // echo
    // $row["level"];

}else{echo
    "<script>alert('Silahkan Login !');window.location = 'login.php';</script>";
}
// session_start();
// if(!$_SESSION['user']){
//     echo "<script>alert('Silahkan Login !');window.location = 'login.php';</script>";
// }
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
                var kpb3_jan = <?php echo $jan2['kpb3'] ?>;
                var kpb4_jan = <?php echo $jan2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jan = 0;
                var kpb1_jan = 0;
                var kpb2_jan = 0;
                var kpb3_jan = 0;
                var kpb4_jan = 0;
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
                var kpb3_feb = <?php echo $feb2['kpb3'] ?>;
                var kpb4_feb = <?php echo $feb2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_feb = 0;
                var kpb1_feb = 0;
                var kpb2_feb = 0;
                var kpb3_feb = 0;
                var kpb4_feb = 0;
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
                var kpb3_mar = <?php echo $mar2['kpb3'] ?>;
                var kpb4_mar = <?php echo $mar2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mar = 0;
                var kpb1_mar = 0;
                var kpb2_mar = 0;
                var kpb3_mar = 0;
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
                var kpb3_apr = <?php echo $apr2['kpb3'] ?>;
                var kpb4_apr = <?php echo $apr2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_apr = 0;
                var kpb1_apr = 0;
                var kpb2_apr = 0;
                var kpb3_apr = 0;
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
                var kpb3_mei = <?php echo $mei2['kpb3'] ?>;
                var kpb4_mei = <?php echo $mei2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mei = 0;
                var kpb1_mei = 0;
                var kpb2_mei = 0;
                var kpb3_mei = 0;
                var kpb4_mei = 0;
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
                var kpb3_jun = <?php echo $jun2['kpb3'] ?>;
                var kpb4_jun = <?php echo $jun2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jun = 0;
                var kpb1_jun = 0;
                var kpb2_jun = 0;
                var kpb3_jun = 0;
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
                var kpb3_jul = <?php echo $jul2['kpb3'] ?>;
                var kpb4_jul = <?php echo $jul2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jul = 0;
                var kpb2_jul = 0;
                var kpb3_jul = 0;
                var kpb4_jul = 0;
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
                var kpb3_ags = <?php echo $ags2['kpb3'] ?>;
                var kpb4_ags = <?php echo $ags2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_ags = 0;
                var kpb1_ags = 0;
                var kpb2_ags = 0;
                var kpb3_ags = 0;
                var kpb4_ags = 0;
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
                var kpb3_sep = <?php echo $sep2['kpb3'] ?>;
                var kpb4_sep = <?php echo $sep2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_sep = 0;
                var kpb1_sep = 0;
                var kpb2_sep = 0;
                var kpb3_sep = 0;
                var kpb4_sep = 0;
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
                var kpb3_okt = <?php echo $okt2['kpb3'] ?>;
                var kpb4_okt = <?php echo $okt2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_okt = 0;
                var kpb1_okt = 0;
                var kpb2_okt = 0;
                var kpb3_okt = 0;
                var kpb4_okt = 0;
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
                var kpb3_nov = <?php echo $nov2['kpb3'] ?>;
                var kpb4_nov = <?php echo $nov2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_nov = 0;
                var kpb1_nov = 0;
                var kpb2_nov = 0;
                var kpb3_nov = 0;
                var kpb4_nov = 0;
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
                var kpb3_des = <?php echo $des2['kpb3'] ?>;
                var kpb4_des = <?php echo $des2['kpb4'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_des = 0;
                var kpb1_des = 0;
                var kpb2_des = 0;
                var kpb3_des = 0;
            </script>
        <?php
        }

        $resultjan1 = mysqli_num_rows($januari1);
        if ($resultjan1 == 1) {
            $jan3 = mysqli_fetch_array($januari1); ?>
            <script>
                var jum_jan1 = <?php echo $jan3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jan1 = 0;
            </script>
        <?php
        }
        $resultfeb1 = mysqli_num_rows($februari1);
        if ($resultfeb1 == 1) {
            $feb3 = mysqli_fetch_array($februari1); ?>
            <script>
                var jum_feb1 = <?php echo $feb3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_feb1 = 0;
            </script>
        <?php
        }
        $resultmar1 = mysqli_num_rows($maret1);
        if ($resultmar1 == 1) {
            $mar3 = mysqli_fetch_array($maret1); ?>
            <script>
                var jum_mar1 = <?php echo $mar3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mar1 = 0;
            </script>
        <?php
        }
        $resultapr1 = mysqli_num_rows($april1);
        if ($resultapr1 == 1) {
            $apr3 = mysqli_fetch_array($april1); ?>
            <script>
                var jum_apr1 = <?php echo $apr3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_apr1 = 0;
            </script>
        <?php
        }

        $resultmei1 = mysqli_num_rows($mei1);
        if ($resultmei1 == 1) {
            $mei3 = mysqli_fetch_array($mei1); ?>
            <script>
                var jum_mei1 = <?php echo $mei3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_mei1 = 0;
            </script>
        <?php
        }
        $resultjun1 = mysqli_num_rows($juni1);
        if ($resultjun1 == 1) {
            $jun3 = mysqli_fetch_array($juni1); ?>
            <script>
                var jum_jun1 = <?php echo $jun3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jun1 = 0;
            </script>
        <?php
        }
        $resultjul1 = mysqli_num_rows($juli1);
        if ($resultjul1 == 1) {
            $jul3 = mysqli_fetch_array($juli1); ?>
            <script>
                var jum_jul1 = <?php echo $jul3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_jul1 = 0;
            </script>
        <?php
        }
        $resultags1 = mysqli_num_rows($agustus1);
        if ($resultags1 == 1) {
            $ags3 = mysqli_fetch_array($agustus1); ?>
            <script>
                var jum_ags1 = <?php echo $ags3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_ags1 = 0;
            </script>
        <?php
        }
        $resultsep1 = mysqli_num_rows($september1);
        if ($resultsep1 == 1) {
            $sep3 = mysqli_fetch_array($september1); ?>
            <script>
                var jum_sep1 = <?php echo $sep3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_sep1 = 0;
            </script>
        <?php
        }

        $resultokt1 = mysqli_num_rows($oktober1);
        if ($resultokt1 == 1) {
            $okt3 = mysqli_fetch_array($oktober1); ?>
            <script>
                var jum_oct1 = <?php echo $okt3['jumlah'] ?>;
            </script>
        <?php
        } else {
        ?>
            <script>
                var jum_oct1 = 0;
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
        ?>
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

            //kpb3
            var hasil_jan2 = +Math.round(kpb3_jan / jum_mei1 * 100);
            var hasil_feb2 = +Math.round(kpb3_feb / jum_jun1 * 100);
            var hasil_mart2 = +Math.round(kpb3_mar / jum_jul1 * 100);
            var hasil_april2 = +Math.round(kpb3_apr / jum_ags1 * 100);
            var hasil_mei2 = +Math.round(kpb3_mei / jum_sep1 * 100);
            var hasil_juni2 = +Math.round(kpb3_jun / jum_oct1 * 100);
            var hasil_juli2 = +Math.round(kpb3_jul / jum_nov1 * 100);
            var hasil_ags2 = +Math.round(kpb3_ags / jum_des1 * 100);
            var hasil_sep2 = +Math.round(kpb3_sep / jum_jan * 100);
            var hasil_okt2 = +Math.round(kpb3_okt / jum_feb * 100);
            var hasil_nov2 = +Math.round(kpb3_nov / jum_mar * 100);
            var hasil_des2 = +Math.round(kpb3_des / jum_apr * 100);
            //kpb3
            var hasil_jan3 = +Math.round(kpb4_jan / jum_jan1 * 100);
            var hasil_feb3 = +Math.round(kpb4_feb / jum_feb1 * 100);
            var hasil_mart3 = +Math.round(kpb4_mar / jum_mar1 * 100);
            var hasil_april3 = +Math.round(kpb4_apr / jum_apr1 * 100);
            var hasil_mei3 = +Math.round(kpb4_mei / jum_mei1 * 100);
            var hasil_juni3 = +Math.round(kpb4_jun / jum_jun1 * 100);
            var hasil_juli3 = +Math.round(kpb4_jul / jum_jul1 * 100);
            var hasil_ags3 = +Math.round(kpb4_ags / jum_ags1 * 100);
            var hasil_sep3 = +Math.round(kpb4_sep / jum_sep1 * 100);
            var hasil_okt3 = +Math.round(kpb4_okt / jum_oct1 * 100);
            var hasil_nov3 = +Math.round(kpb4_nov / jum_nov1 * 100);
            var hasil_des3 = +Math.round(kpb4_des / jum_des1 * 100);




            // document.write("" + Math.round(hasil_mart));
        </script>
    <?php
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

        $januari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Januari' ");
        $februari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Februari' ");
        $maret1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Maret' ");
        $april1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='April' ");
        $mei1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Mei' ");
        $juni1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juni' ");
        $juli1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juli' ");
        $agustus1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Agustus' ");
        $september1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='September' ");
        $oktober1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Oktober' ");
        $november1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='November' ");
        $desember1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Desember' ");

        $januari2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Januari' ");
        $februari2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Februari' ");
        $maret2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Maret' ");
        $april2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='April' ");
        $mei12 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Mei' ");
        $juni2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Juni' ");
        $juli2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Juli' ");
        $agustus2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Agustus' ");
        $september2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='September' ");
        $oktober2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Oktober' ");
        $november2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='November' ");
        $desember2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Desember' ");



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

        $jan3 = mysqli_fetch_array($januari1);
        $feb3 = mysqli_fetch_array($februari1);
        $mar3 = mysqli_fetch_array($maret1);
        $apr3 = mysqli_fetch_array($april1);
        $mei3 = mysqli_fetch_array($mei1);
        $jun3 = mysqli_fetch_array($juni1);
        $jul3 = mysqli_fetch_array($juli1);
        $ags3 = mysqli_fetch_array($agustus1);
        $sep3 = mysqli_fetch_array($september1);
        $okt3 = mysqli_fetch_array($oktober1);
        $nov3 = mysqli_fetch_array($november1);
        $des3 = mysqli_fetch_array($desember1);

        $jan4 = mysqli_fetch_array($januari2);
        $feb4 = mysqli_fetch_array($februari2);
        $mar4 = mysqli_fetch_array($maret2);
        $apr4 = mysqli_fetch_array($april2);
        $mei4 = mysqli_fetch_array($mei12);
        $jun4 = mysqli_fetch_array($juni2);
        $jul4 = mysqli_fetch_array($juli2);
        $ags4 = mysqli_fetch_array($agustus2);
        $sep4 = mysqli_fetch_array($september2);
        $okt4 = mysqli_fetch_array($oktober2);
        $nov4 = mysqli_fetch_array($november2);
        $des4 = mysqli_fetch_array($desember2);

    ?>
        <script>
            var jum_jan = <?php echo $jan2['semua'] ?>;
            var kpb1_jan = <?php echo $jan2['kb1'] ?>;
            var kpb2_jan = <?php echo $jan3['kb2'] ?>;
            var kpb3_jan = <?php echo $jan3['kb3'] ?>;
            var kpb4_jan = <?php echo $jan4['kb4'] ?>;
            var jum_feb = <?php echo $feb2['semua'] ?>;
            var kpb1_feb = <?php echo $feb2['kb1'] ?>;
            var kpb2_feb = <?php echo $feb3['kb2'] ?>;
            var kpb3_feb = <?php echo $feb3['kb3'] ?>;
            var kpb4_feb = <?php echo $feb4['kb4'] ?>;
            var jum_mar = <?php echo $mar2['semua'] ?>;
            var kpb1_mar = <?php echo $mar2['kb1'] ?>;
            var kpb2_mar = <?php echo $mar3['kb2'] ?>;
            var kpb3_mar = <?php echo $mar3['kb3'] ?>;
            var kpb4_mar = <?php echo $mar4['kb4'] ?>;
            var jum_apr = <?php echo $apr2['semua'] ?>;
            var kpb1_apr = <?php echo $apr2['kb1'] ?>;
            var kpb2_apr = <?php echo $apr3['kb2'] ?>;
            var kpb3_apr = <?php echo $apr3['kb3'] ?>;
            var kpb4_apr = <?php echo $apr4['kb4'] ?>;
            var jum_mei = <?php echo $mei2['semua'] ?>;
            var kpb1_mei = <?php echo $mei2['kb1'] ?>;
            var kpb2_mei = <?php echo $mei3['kb2'] ?>;
            var kpb3_mei = <?php echo $mei3['kb3'] ?>;
            var kpb4_mei = <?php echo $mei4['kb4'] ?>;
            var jum_jun = <?php echo $jun2['semua'] ?>;
            var kpb1_jun = <?php echo $jun2['kb1'] ?>;
            var kpb2_jun = <?php echo $jun3['kb2'] ?>;
            var kpb3_jun = <?php echo $jun3['kb3'] ?>;
            var kpb4_jun = <?php echo $jun4['kb4'] ?>;
            var jum_jul = <?php echo $jul2['semua'] ?>;
            var kpb1_jul = <?php echo $jul2['kb1'] ?>;
            var kpb2_jul = <?php echo $jul3['kb2'] ?>;
            var kpb3_jul = <?php echo $jul3['kb3'] ?>;
            var kpb4_jul = <?php echo $jul4['kb4'] ?>;
            var jum_ags = <?php echo $ags2['semua'] ?>;
            var kpb1_ags = <?php echo $ags2['kb1'] ?>;
            var kpb2_ags = <?php echo $ags3['kb2'] ?>;
            var kpb3_ags = <?php echo $ags3['kb3'] ?>;
            var kpb4_ags = <?php echo $ags4['kb4'] ?>;
            var jum_sep = <?php echo $sep2['semua'] ?>;
            var kpb1_sep = <?php echo $sep2['kb1'] ?>;
            var kpb2_sep = <?php echo $sep3['kb2'] ?>;
            var kpb3_sep = <?php echo $sep3['kb3'] ?>;
            var kpb4_sep = <?php echo $sep4['kb4'] ?>;
            var jum_okt = <?php echo $okt2['semua'] ?>;
            var kpb1_okt = <?php echo $okt2['kb1'] ?>;
            var kpb2_okt = <?php echo $okt3['kb2'] ?>;
            var kpb3_okt = <?php echo $okt3['kb3'] ?>;
            var kpb4_okt = <?php echo $okt4['kb4'] ?>;
            var jum_nov = <?php echo $nov2['semua'] ?>;
            var kpb1_nov = <?php echo $nov2['kb1'] ?>;
            var kpb2_nov = <?php echo $nov3['kb2'] ?>;
            var kpb3_nov = <?php echo $nov3['kb3'] ?>;
            var kpb4_nov = <?php echo $nov4['kb4'] ?>;
            var jum_des = <?php echo $des2['semua'] ?>;
            var kpb1_des = <?php echo $des2['kb1'] ?>;
            var kpb2_des = <?php echo $des3['kb2'] ?>;
            var kpb3_des = <?php echo $des3['kb3'] ?>;
            var kpb4_des = <?php echo $des4['kb4'] ?>;

            //tahun kemarin


            var hasil_jan = +Math.round(kpb1_jan / jum_nov * 100);
            var hasil_feb = +Math.round(kpb1_feb / jum_des * 100);
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

            var hasil_jan1 = +Math.round(kpb2_jan / jum_sep * 100);
            var hasil_feb1 = +Math.round(kpb2_feb / jum_okt * 100);
            var hasil_mart1 = +Math.round(kpb2_mar / jum_nov * 100);
            var hasil_april1 = +Math.round(kpb2_apr / jum_des * 100);
            var hasil_mei1 = +Math.round(kpb2_mei / jum_jan * 100);
            var hasil_juni1 = +Math.round(kpb2_jun / jum_feb * 100);
            var hasil_juli1 = +Math.round(kpb2_jul / jum_mar * 100);
            var hasil_ags1 = +Math.round(kpb2_ags / jum_apr * 100);
            var hasil_sep1 = +Math.round(kpb2_sep / jum_mei * 100);
            var hasil_okt1 = +Math.round(kpb2_okt / jum_jun * 100);
            var hasil_nov1 = +Math.round(kpb2_nov / jum_jul * 100);
            var hasil_des1 = +Math.round(kpb2_des / jum_ags * 100);

            var hasil_jan2 = +Math.round(kpb3_jan / jum_mei * 100);
            var hasil_feb2 = +Math.round(kpb3_feb / jum_jun * 100);
            var hasil_mart2 = +Math.round(kpb3_mar / jum_jul * 100);
            var hasil_april2 = +Math.round(kpb3_apr / jum_ags * 100);
            var hasil_mei2 = +Math.round(kpb3_mei / jum_sep * 100);
            var hasil_juni2 = +Math.round(kpb3_jun / jum_okt * 100);
            var hasil_juli2 = +Math.round(kpb3_jul / jum_nov * 100);
            var hasil_ags2 = +Math.round(kpb3_ags / jum_des * 100);
            var hasil_sep2 = +Math.round(kpb3_sep / jum_jan * 100);
            var hasil_okt2 = +Math.round(kpb3_okt / jum_feb * 100);
            var hasil_nov2 = +Math.round(kpb3_nov / jum_mar * 100);
            var hasil_des2 = +Math.round(kpb3_des / jum_apr * 100);

            var hasil_jan3 = +Math.round(kpb4_jan / jum_jan * 100);
            var hasil_feb3 = +Math.round(kpb4_feb / jum_feb * 100);
            var hasil_mart3 = +Math.round(kpb4_mar / jum_mar * 100);
            var hasil_april3 = +Math.round(kpb4_apr / jum_apr * 100);
            var hasil_mei3 = +Math.round(kpb4_mei / jum_mei * 100);
            var hasil_juni3 = +Math.round(kpb4_jun / jum_jun * 100);
            var hasil_juli3 = +Math.round(kpb4_jul / jum_jul * 100);
            var hasil_ags3 = +Math.round(kpb4_ags / jum_ags * 100);
            var hasil_sep3 = +Math.round(kpb4_sep / jum_sep * 100);
            var hasil_okt3 = +Math.round(kpb4_okt / jum_okt * 100);
            var hasil_nov3 = +Math.round(kpb4_nov / jum_nov * 100);
            var hasil_des3 = +Math.round(kpb4_des / jum_des * 100);
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

    $januari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Januari' ");
    $februari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Februari' ");
    $maret1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Maret' ");
    $april1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='April' ");
    $mei1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Mei' ");
    $juni1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juni' ");
    $juli1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juli' ");
    $agustus1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Agustus' ");
    $september1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='September' ");
    $oktober1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Oktober' ");
    $november1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='November' ");
    $desember1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Desember' ");

    $januari2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Januari' ");
    $februari2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Februari' ");
    $maret2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Maret' ");
    $april2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='April' ");
    $mei12 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Mei' ");
    $juni2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Juni' ");
    $juli2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Juli' ");
    $agustus2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Agustus' ");
    $september2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='September' ");
    $oktober2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Oktober' ");
    $november2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='November' ");
    $desember2 = mysqli_query($koneksi, "SELECT SUM(kpb4) AS kb4 FROM db_astra WHERE bulan='Desember' ");



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

    $jan3 = mysqli_fetch_array($januari1);
    $feb3 = mysqli_fetch_array($februari1);
    $mar3 = mysqli_fetch_array($maret1);
    $apr3 = mysqli_fetch_array($april1);
    $mei3 = mysqli_fetch_array($mei1);
    $jun3 = mysqli_fetch_array($juni1);
    $jul3 = mysqli_fetch_array($juli1);
    $ags3 = mysqli_fetch_array($agustus1);
    $sep3 = mysqli_fetch_array($september1);
    $okt3 = mysqli_fetch_array($oktober1);
    $nov3 = mysqli_fetch_array($november1);
    $des3 = mysqli_fetch_array($desember1);

    $jan4 = mysqli_fetch_array($januari2);
    $feb4 = mysqli_fetch_array($februari2);
    $mar4 = mysqli_fetch_array($maret2);
    $apr4 = mysqli_fetch_array($april2);
    $mei4 = mysqli_fetch_array($mei12);
    $jun4 = mysqli_fetch_array($juni2);
    $jul4 = mysqli_fetch_array($juli2);
    $ags4 = mysqli_fetch_array($agustus2);
    $sep4 = mysqli_fetch_array($september2);
    $okt4 = mysqli_fetch_array($oktober2);
    $nov4 = mysqli_fetch_array($november2);
    $des4 = mysqli_fetch_array($desember2);

    ?>
    <script>
        var jum_jan = <?php echo $jan2['semua'] ?>;
        var kpb1_jan = <?php echo $jan2['kb1'] ?>;
        var kpb2_jan = <?php echo $jan3['kb2'] ?>;
        var kpb3_jan = <?php echo $jan3['kb3'] ?>;
        var kpb4_jan = <?php echo $jan4['kb4'] ?>;
        var jum_feb = <?php echo $feb2['semua'] ?>;
        var kpb1_feb = <?php echo $feb2['kb1'] ?>;
        var kpb2_feb = <?php echo $feb3['kb2'] ?>;
        var kpb3_feb = <?php echo $feb3['kb3'] ?>;
        var kpb4_feb = <?php echo $feb4['kb4'] ?>;
        var jum_mar = <?php echo $mar2['semua'] ?>;
        var kpb1_mar = <?php echo $mar2['kb1'] ?>;
        var kpb2_mar = <?php echo $mar3['kb2'] ?>;
        var kpb3_mar = <?php echo $mar3['kb3'] ?>;
        var kpb4_mar = <?php echo $mar4['kb4'] ?>;
        var jum_apr = <?php echo $apr2['semua'] ?>;
        var kpb1_apr = <?php echo $apr2['kb1'] ?>;
        var kpb2_apr = <?php echo $apr3['kb2'] ?>;
        var kpb3_apr = <?php echo $apr3['kb3'] ?>;
        var kpb4_apr = <?php echo $apr4['kb4'] ?>;
        var jum_mei = <?php echo $mei2['semua'] ?>;
        var kpb1_mei = <?php echo $mei2['kb1'] ?>;
        var kpb2_mei = <?php echo $mei3['kb2'] ?>;
        var kpb3_mei = <?php echo $mei3['kb3'] ?>;
        var kpb4_mei = <?php echo $mei4['kb4'] ?>;
        var jum_jun = <?php echo $jun2['semua'] ?>;
        var kpb1_jun = <?php echo $jun2['kb1'] ?>;
        var kpb2_jun = <?php echo $jun3['kb2'] ?>;
        var kpb3_jun = <?php echo $jun3['kb3'] ?>;
        var kpb4_jun = <?php echo $jun4['kb4'] ?>;
        var jum_jul = <?php echo $jul2['semua'] ?>;
        var kpb1_jul = <?php echo $jul2['kb1'] ?>;
        var kpb2_jul = <?php echo $jul3['kb2'] ?>;
        var kpb3_jul = <?php echo $jul3['kb3'] ?>;
        var kpb4_jul = <?php echo $jul4['kb4'] ?>;
        var jum_ags = <?php echo $ags2['semua'] ?>;
        var kpb1_ags = <?php echo $ags2['kb1'] ?>;
        var kpb2_ags = <?php echo $ags3['kb2'] ?>;
        var kpb3_ags = <?php echo $ags3['kb3'] ?>;
        var kpb4_ags = <?php echo $ags4['kb4'] ?>;
        var jum_sep = <?php echo $sep2['semua'] ?>;
        var kpb1_sep = <?php echo $sep2['kb1'] ?>;
        var kpb2_sep = <?php echo $sep3['kb2'] ?>;
        var kpb3_sep = <?php echo $sep3['kb3'] ?>;
        var kpb4_sep = <?php echo $sep4['kb4'] ?>;
        var jum_okt = <?php echo $okt2['semua'] ?>;
        var kpb1_okt = <?php echo $okt2['kb1'] ?>;
        var kpb2_okt = <?php echo $okt3['kb2'] ?>;
        var kpb3_okt = <?php echo $okt3['kb3'] ?>;
        var kpb4_okt = <?php echo $okt4['kb4'] ?>;
        var jum_nov = <?php echo $nov2['semua'] ?>;
        var kpb1_nov = <?php echo $nov2['kb1'] ?>;
        var kpb2_nov = <?php echo $nov3['kb2'] ?>;
        var kpb3_nov = <?php echo $nov3['kb3'] ?>;
        var kpb4_nov = <?php echo $nov4['kb4'] ?>;
        var jum_des = <?php echo $des2['semua'] ?>;
        var kpb1_des = <?php echo $des2['kb1'] ?>;
        var kpb2_des = <?php echo $des3['kb2'] ?>;
        var kpb3_des = <?php echo $des3['kb3'] ?>;
        var kpb4_des = <?php echo $des4['kb4'] ?>;

        //tahun kemarin


        var hasil_jan = +Math.round(kpb1_jan / jum_nov * 100);
        var hasil_feb = +Math.round(kpb1_feb / jum_des * 100);
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

        var hasil_jan1 = +Math.round(kpb2_jan / jum_sep * 100);
        var hasil_feb1 = +Math.round(kpb2_feb / jum_okt * 100);
        var hasil_mart1 = +Math.round(kpb2_mar / jum_nov * 100);
        var hasil_april1 = +Math.round(kpb2_apr / jum_des * 100);
        var hasil_mei1 = +Math.round(kpb2_mei / jum_jan * 100);
        var hasil_juni1 = +Math.round(kpb2_jun / jum_feb * 100);
        var hasil_juli1 = +Math.round(kpb2_jul / jum_mar * 100);
        var hasil_ags1 = +Math.round(kpb2_ags / jum_apr * 100);
        var hasil_sep1 = +Math.round(kpb2_sep / jum_mei * 100);
        var hasil_okt1 = +Math.round(kpb2_okt / jum_jun * 100);
        var hasil_nov1 = +Math.round(kpb2_nov / jum_jul * 100);
        var hasil_des1 = +Math.round(kpb2_des / jum_ags * 100);

        var hasil_jan2 = +Math.round(kpb3_jan / jum_mei * 100);
        var hasil_feb2 = +Math.round(kpb3_feb / jum_jun * 100);
        var hasil_mart2 = +Math.round(kpb3_mar / jum_jul * 100);
        var hasil_april2 = +Math.round(kpb3_apr / jum_ags * 100);
        var hasil_mei2 = +Math.round(kpb3_mei / jum_sep * 100);
        var hasil_juni2 = +Math.round(kpb3_jun / jum_okt * 100);
        var hasil_juli2 = +Math.round(kpb3_jul / jum_nov * 100);
        var hasil_ags2 = +Math.round(kpb3_ags / jum_des * 100);
        var hasil_sep2 = +Math.round(kpb3_sep / jum_jan * 100);
        var hasil_okt2 = +Math.round(kpb3_okt / jum_feb * 100);
        var hasil_nov2 = +Math.round(kpb3_nov / jum_mar * 100);
        var hasil_des2 = +Math.round(kpb3_des / jum_apr * 100);

        var hasil_jan3 = +Math.round(kpb4_jan / jum_jan * 100);
        var hasil_feb3 = +Math.round(kpb4_feb / jum_feb * 100);
        var hasil_mart3 = +Math.round(kpb4_mar / jum_mar * 100);
        var hasil_april3 = +Math.round(kpb4_apr / jum_apr * 100);
        var hasil_mei3 = +Math.round(kpb4_mei / jum_mei * 100);
        var hasil_juni3 = +Math.round(kpb4_jun / jum_jun * 100);
        var hasil_juli3 = +Math.round(kpb4_jul / jum_jul * 100);
        var hasil_ags3 = +Math.round(kpb4_ags / jum_ags * 100);
        var hasil_sep3 = +Math.round(kpb4_sep / jum_sep * 100);
        var hasil_okt3 = +Math.round(kpb4_okt / jum_okt * 100);
        var hasil_nov3 = +Math.round(kpb4_nov / jum_nov * 100);
        var hasil_des3 = +Math.round(kpb4_des / jum_des * 100);
    </script>
<?php
}

?>
<!DOCTYPE html>

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
                <?php
                if ($row['level'] == 'admin') { ?>
                <a href="register.php" class="btn btn-solid-border d-none d-lg-block">Register <i class="fa fa-angle-right ml-2"></i></a>
                <?php
                }
                ?>
                <a href="logout.php" class="btn btn-solid-border d-none d-lg-block">Logout <i class="fa fa-angle-right ml-2"></i></a>
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
                <div class="chart-container" style="position: relative;  width:70vw">
                    <canvas id="myChart"></canvas>

                </div>
                <div class="container">
                    <div><a href="chard2.php" class="btn btn-solid-border d-none d-lg-block">Data <i class="fa fa-angle-right ml-2"></i></a></div>
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

                            {
                                label: 'KPB3',
                                backgroundColor: 'red', //warna titik
                                borderColor: 'red', // warna garis
                                data: [hasil_jan2, hasil_feb2, hasil_mart2, hasil_april2, hasil_mei2, hasil_juni2, hasil_juli2, hasil_ags2, hasil_sep2, hasil_okt2, hasil_nov2, hasil_des2], //nilai dari chard
                            },
                            {
                                label: 'KPB4',
                                backgroundColor: 'yellow', //warna titik
                                borderColor: 'yellow', // warna garis
                                data: [hasil_jan3, hasil_feb3, hasil_mart3, hasil_april3, hasil_mei3, hasil_juni3, hasil_juli3, hasil_ags3, hasil_sep3, hasil_okt3, hasil_nov3, hasil_des3], //nilai dari chard
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
        <!-- garis pembatas-->
        <hr>
        <!-- garis pembatas-->
        <!-- start visi misi-->
        <div class="container">
            <div class="container-fluid p-5 btn text-white text-center">
                <h1>Filosofi, Visi Misi</h1>
            </div>
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


    <section class="section process">

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