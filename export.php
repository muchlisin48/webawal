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
<?php
if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
    $kota = $_GET['kota'];
    $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE tahun='$tahun'");

    if ($tahun != null & $kota != null) {
        $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE kota='$kota' and tahun='$tahun'");
        $tahun_kurang = $tahun - 1;
        //tahun ini
        $januari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' and tahun='$tahun'and kota='$kota'");
        $februari = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' and tahun='$tahun'and kota='$kota'");
        $maret = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' and tahun='$tahun'and kota='$kota'");
        $april = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' and tahun='$tahun'and kota='$kota'");
        $mei = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' and tahun='$tahun'and kota='$kota'");
        $juni = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' and tahun='$tahun'and kota='$kota'");
        $juli = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' and tahun='$tahun'and kota='$kota'");
        $agustus = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' and tahun='$tahun'and kota='$kota'");
        $september = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' and tahun='$tahun'and kota='$kota'");
        $oktober = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' and tahun='$tahun'and kota='$kota'");
        $november = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun'and kota='$kota'");
        $desember = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun'and kota='$kota'");
        //tahun kurang
        $januari1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Januari' and tahun='$tahun_kurang'and kota='$kota'");
        $februari1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Februari' and tahun='$tahun_kurang'and kota='$kota'");
        $maret1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Maret' and tahun='$tahun_kurang'and kota='$kota'");
        $april1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='April' and tahun='$tahun_kurang'and kota='$kota'");
        $mei1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Mei' and tahun='$tahun_kurang'and kota='$kota'");
        $juni1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juni' and tahun='$tahun_kurang'and kota='$kota'");
        $juli1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Juli' and tahun='$tahun_kurang'and kota='$kota'");
        $agustus1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Agustus' and tahun='$tahun_kurang'and kota='$kota'");
        $september1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='September' and tahun='$tahun_kurang'and kota='$kota'");
        $oktober1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Oktober' and tahun='$tahun_kurang'and kota='$kota'");
        $november1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='November' and tahun='$tahun_kurang'and kota='$kota'");
        $desember1 = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE bulan='Desember' and tahun='$tahun_kurang'and kota='$kota'");
    }
    if ($tahun != null & $kota == 0) {
        $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra WHERE tahun='$tahun'");
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
    }
    if ($tahun == 0 && $kota != null) {
        $tamPeg = mysqli_query($koneksi, "SELECT * FROM db_astra where kota='$kota'");
        $januari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Januari'and kota='$kota' ");
        $februari = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Februari'and kota='$kota' ");
        $maret = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Maret'and kota='$kota' ");
        $april = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='April'and kota='$kota' ");
        $mei = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Mei'and kota='$kota' ");
        $juni = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juni'and kota='$kota' ");
        $juli = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Juli'and kota='$kota' ");
        $agustus = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Agustus'and kota='$kota' ");
        $september = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='September' and kota='$kota'");
        $oktober = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Oktober'and kota='$kota' ");
        $november = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='November'and kota='$kota'");
        $desember = mysqli_query($koneksi, "SELECT SUM(jumlah) AS semua, SUM(kpb1) AS kb1 FROM db_astra WHERE bulan='Desember' and kota='$kota'");

        $januari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Januari'and kota='$kota' ");
        $februari1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Februari'and kota='$kota' ");
        $maret1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Maret'and kota='$kota' ");
        $april1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='April' and kota='$kota'");
        $mei1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Mei' and kota='$kota'");
        $juni1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juni'and kota='$kota' ");
        $juli1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Juli'and kota='$kota' ");
        $agustus1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Agustus' and kota='$kota'");
        $september1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='September'and kota='$kota' ");
        $oktober1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Oktober' and kota='$kota'");
        $november1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='November' and kota='$kota'");
        $desember1 = mysqli_query($koneksi, "SELECT SUM(kpb3) AS kb3, SUM(kpb2) AS kb2 FROM db_astra WHERE bulan='Desember' and kota='$kota'");

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
    }
    if ($tahun == 0 && $kota == 0) {
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
}
?>
<html>

<head>
    <title>Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Data</h2>
        <div class="data-tables datatable-dark">
            <table class="table" style="text-align:center ;" id="mauexport">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">jumlah</th>
                        <th scope="col">kpb1</th>
                        <th scope="col">kpb2</th>
                        <th scope="col">kpb3</th>
                        <th scope="col">kpb4</th>
                        <th scope="col">Kota</th>
                    </tr>
                <tbody>
                    <!-- menampilkan data php -->
                    <?php
                    $sql2 = "select * from db_astra";
                    $q2 = mysqli_query($koneksi, $sql2);
                    
                    while ($r2 = mysqli_fetch_array($tamPeg)) {
                        $tanggal     = $r2['tanggal'];
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

                            <th scope="row"><?php echo $tanggal ?></th>
                            <td scope="row"><?php echo $tahun_data ?></td>
                            <td scope="row"><?php echo $bulan ?></td>
                            <td scope="row"><?php echo $jumlah ?></td>
                            <td scope="row"><?php echo $kpb1 ?> </td>
                            <td scope="row"><?php echo $kpb2 ?> </td>
                            <td scope="row"><?php echo $kpb3 ?> </td>
                            <td scope="row"><?php echo $kpb4 ?> </td>
                            <td scope="row"><?php echo $kota ?> </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
                </thead>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>