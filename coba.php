<?php
include('koneksi.php');
$data_bulan = mysqli_query($koneksi, "SELECT bulan FROM db_astra GROUP BY bulan");
$kota = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra GROUP BY bulan");
$kota2 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb2) AS kb2 FROM db_astra GROUP BY bulan");
$kota3 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb3) AS kb3 FROM db_astra GROUP BY bulan");
$kota4 = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb4) AS kb4 FROM db_astra GROUP BY bulan");
?>
<html>

<head>
    <title></title>
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            padding-top: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js" integrity="sha512-Tfw6etYMUhL4RTki37niav99C6OHwMDB2iBT5S5piyHO+ltK2YX8Hjy9TXxhE1Gm/TmAV0uaykSpnHKFIAif/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


<body>

    <!-- Halaman Inti-->
    <div class="mx-auto">
        <h3>Menampilkan data tabel dan grafik</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <p>Select list:</p>
            <select name="kota" style="width:160px;">
                <option value="semua">Semua</option>
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

        <input type="text" name="" id="myInput" placeholder="name.." onkeyup="myFunction()">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>tanggal</th>
                    <th>jumlah</th>
                    <th>kota</th>
                    <th>kpb1</th>
                    <th>kpb2</th>
                    <th>kpb3</th>
                    <th>kpb4</th>
                </tr>
            </thead>
            <?php
            if (isset($_GET['kota'])) {
                $kota = $_GET['kota'];
                if ($kota != null) {
                    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE kota='$kota'");
                }
                if ($kota == 'semua') {
                    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");
                }

                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox


                $no = 0;
                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                    $no++;
            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $tpeg['bulan']; ?></td>
                            <td><?php echo $tpeg['jumlah']; ?></td>
                            <td><?php echo $tpeg['kota']; ?></td>
                            <td><?php echo $tpeg['kpb1']; ?></td>
                            <td><?php echo $tpeg['kpb2']; ?></td>
                            <td><?php echo $tpeg['kpb3']; ?></td>
                            <td><?php echo $tpeg['kpb4']; ?></td>
                        </tr>
                    </tbody>
                    <script>
                        function myFunction() {
                            var input, filter, tbody, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCese();
                            tbody = document.getElementById("myTable");
                            tr = tbody.getElementsByTagName("tr");

                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[3];
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>
                <?php
                }
            } else {
                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra ");

                $no = 0;
                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                    $no++;
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $tpeg['tanggal']; ?></td>
                            <td><?php echo $tpeg['jumlah']; ?></td>
                            <td><?php echo $tpeg['kota']; ?></td>
                            <td><?php echo $tpeg['kpb1']; ?></td>
                            <td><?php echo $tpeg['kpb2']; ?></td>
                            <td><?php echo $tpeg['kpb3']; ?></td>
                            <td><?php echo $tpeg['kpb4']; ?></td>
                        </tr>
                    </tbody>
                    <script>
                        function myFunction() {
                            var input, filter, tbody, tr, td, i, txtValue;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCese();
                            tbody = document.getElementById("myTable");
                            tr = tbody.getElementsByTagName("tr");

                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[3];
                                if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>
            <?php
                }
            }
            ?>
        </table>



        <!-- <div class="chart-container" style="position: relative; height:40vh; width:80vw">
            <canvas id="myChart"></canvas>
        </div>



        <script>
            const labels = [
                <?php while ($row = mysqli_fetch_array($data_bulan)) {
                    echo '"' . $row['bulan'] . '",';
                } ?>,
            ];
            const data = {
                labels: labels,
                datasets: [{
                        label: 'KPB1',
                        backgroundColor: 'rgb(255, 99, 132)', //warna titik
                        borderColor: 'rgb(255, 99, 132)', // warna garis
                        data: [<?php while ($row = mysqli_fetch_array($kota)) {
                                    echo '"' . round($row['kb1'] / $row['semua'] * '100') . '",';
                                } ?>], //nilai dari chard
                    },
                    {
                        label: 'KPB2',
                        backgroundColor: 'blue', //warna titik
                        borderColor: 'blue', // warna garis
                        data: [<?php while ($row = mysqli_fetch_array($kota2)) {
                                    echo '"' . round($row['kb2'] / $row['semua'] * '100') . '",';
                                } ?>], //nilai dari chard
                    },
                    {
                        label: 'KPB3',
                        backgroundColor: 'green', //warna titik
                        borderColor: 'green', // warna garis
                        data: [<?php while ($row = mysqli_fetch_array($kota3)) {
                                    echo '"' . round($row['kb3'] / $row['semua'] * '100') . '",';
                                } ?>], //nilai dari chard
                    },
                    {
                        label: 'KPB4',
                        backgroundColor: 'yellow', //warna titik
                        borderColor: 'yellow', // warna garis
                        data: [<?php while ($row = mysqli_fetch_array($kota4)) {
                                    echo '"' . round($row['kb4'] / $row['semua'] * '100') . '",';
                                } ?>], //nilai dari chard
                        datalabels: {
                            anchor: 'end',
                            color: 'red'
                        }
                    }
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
        </script> -->

    </div>
</body>

</html>