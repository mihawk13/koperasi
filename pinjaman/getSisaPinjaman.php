<?php
include "../koneksidb.php";

$idPinjaman = $_GET['idPinjaman'];

$query = "SELECT a.jumlah_bayar,SUM(b.jumlah_angsuran) angsuran FROM pinjaman a
LEFT JOIN angsuran b ON a.id_pinjaman=b.id_pinjaman
WHERE a.id_pinjaman = '$idPinjaman' GROUP BY b.id_pinjaman";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
echo json_encode($data);


