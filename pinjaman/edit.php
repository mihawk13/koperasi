<?php

$id_pinjaman = $_GET['id_pinjaman'];

$sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM pinjaman a
INNER JOIN anggota b ON a.id_anggota=b.id WHERE a.id_pinjaman='$id_pinjaman'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Pinjaman
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <input type="hidden" name="id_pinjaman" value="<?= $tampil['id_pinjaman'] ?>" readonly required>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" value="<?= $tampil['nama_anggota'] ?>" required readonly>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman" value="<?= $tampil['jumlah_pinjaman'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input class="form-control" type="date" name="tanggal_pinjam" value="<?= $tampil['tanggal_pinjam'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input class="form-control" type="date" name="tanggal_selesai" value="<?= $tampil['tanggal_selesai'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jangka Waktu (bulan)</label>
                        <input class="form-control" name="jangka_waktu" value="<?= $tampil['jangka_waktu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Bunga (%)</label>
                        <input class="form-control" name="bunga" id="bunga" value="<?= $tampil['bunga'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Bayar</label>
                        <input class="form-control" name="jumlah_bayar" id="jumlah_bayar" value="<?= $tampil['jumlah_bayar'] ?>" readonly>
                    </div>

                    <div>
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$id_pinjaman = @$_POST['id_pinjaman'];
// $nama_anggota = @$_POST['nama_anggota'];
$jumlah_pinjaman = @$_POST['jumlah_pinjaman'];
$jangka_waktu = @$_POST['jangka_waktu'];
$tanggal_pinjam = @$_POST['tanggal_pinjam'];
$tanggal_selesai = @$_POST['tanggal_selesai'];
$bunga = @$_POST['bunga'];
$jumlah_bayar = @$_POST['jumlah_bayar'];
$sisa_pinjaman = @$_POST['sisa_pinjaman'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("UPDATE pinjaman SET jumlah_pinjaman='$jumlah_pinjaman', tanggal_pinjam='$tanggal_pinjam', tanggal_selesai='$tanggal_selesai', jangka_waktu='$jangka_waktu', bunga='$bunga', jumlah_bayar='$jumlah_bayar' where id_pinjaman='$id_pinjaman'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=pinjaman";
        </script>
<?php
    }
}
?>