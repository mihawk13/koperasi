<?php

$id_tabungan = $_GET['id_tabungan'];

$sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM tabungan a
INNER JOIN anggota b ON a.id_anggota=b.id WHERE a.id_tabungan='$id_tabungan'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data Tabungan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>ID Tabungan</label>
                        <input class="form-control" name="id_tabungan" value="<?= $tampil['id_tabungan'] ?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label>No Rekening</label>
                        <input class="form-control" name="no_rek" value="<?= $tampil['no_rek'] ?>" required readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" value="<?= $tampil['nama_anggota'] ?>" required readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Jenis</label>
                        <input class="form-control" name="nama_jenis" value="<?= $tampil['nama_jenis'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Saldo Awal</label>
                        <input class="form-control" name="saldo_awal" value="<?= $tampil['saldo_awal'] ?>" required>
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
$id_tabungan = @$_POST['id_tabungan'];
// $no_rek = @$_POST['no_rek'];
// $nama_anggota = @$_POST['nama_anggota'];
$nama_jenis = @$_POST['nama_jenis'];
$saldo_awal = @$_POST['saldo_awal'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("UPDATE tabungan SET nama_jenis='$nama_jenis', saldo_awal='$saldo_awal' where id_tabungan='$id_tabungan'");

    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=tabungan";
        </script>
    <?php
}
}
?>