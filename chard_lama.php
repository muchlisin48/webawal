<?php
include 'koneksi.php'
?>
<?php
if (isset($_GET['tahun'])&&($_GET['kota'])) {
    $tahun = $_GET['tahun'];
    $kota =$_GET['kota'];
    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE tahun='$tahun' and kota ='$kota'");

    if ($tahun != null) {
        $tahun_kurang = $tahun - 1;
        //tahun ini
        $januari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' and tahun='$tahun' and kota ='$kota'");
        $februari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' and tahun='$tahun' and kota ='$kota'");
        $maret = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' and tahun='$tahun' and kota ='$kota'");
        $april = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' and tahun='$tahun' and kota ='$kota'");
        $mei = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' and tahun='$tahun' and kota ='$kota'");
        $juni = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' and tahun='$tahun' and kota ='$kota'");
        $juli = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' and tahun='$tahun' and kota ='$kota'");
        $agustus = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' and tahun='$tahun' and kota ='$kota'");
        $september = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' and tahun='$tahun' and kota ='$kota'");
        $oktober = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' and tahun='$tahun' and kota ='$kota'");
        $november = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun' and kota ='$kota'");
        $desember = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun'and kota ='$kota'");

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

        $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun_kurang'and kota ='$kota'");
        $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun_kurang'and kota ='$kota'");

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!--navbar -->
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Logo</span>
    </nav>
    <!--akhir navbar -->
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
            <select name="kota" style="width:160px;">
                <option value="0">Semua</option>
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    = mysqli_query($koneksi, "SELECT * FROM db_astra GROUP BY kota ORDER BY kota");
                while ($data = mysqli_fetch_array($query)) {
                ?>

                    <option value="<?= $data['kota']; ?>" name="kotapilih"><?php echo $data['kota']; ?></option>
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