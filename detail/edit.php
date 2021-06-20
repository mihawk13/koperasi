<?php

$id_detail = $_GET['id_detail'];

$sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM detail a
INNER JOIN anggota b ON a.id_anggota=b.id WHERE a.id_detail='$id_detail'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Detail Tabungan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>ID Tabungan</label>
                        <input class="form-control" name="id_detail" value="<?php echo $tampil['id_detail'] ?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['tanggal'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" value="<?php echo $tampil['nama_anggota'] ?>" required readonly>
                    </div>

                    <div class="form-group">
                        <label>Jenis Tabungan</label>
                        <input class="form-control" name="jenis_tabungan" value="<?php echo $tampil['jenis_tabungan'] ?>" required readonly>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" name="jumlah" value="<?php echo $tampil['jumlah'] ?>" required>
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
$id_detail = @$_POST['id_detail'];
$tanggal = @$_POST['tanggal'];
// $no_rek = @$_POST['no_rek'];
// $nama_anggota = @$_POST['nama_anggota'];
// $jenis_tabungan = @$_POST['jenis_tabungan'];
$jumlah = @$_POST['jumlah'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("UPDATE detail SET tanggal='$tanggal', jumlah='$jumlah' where id_detail='$id_detail'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=detail";
        </script>
<?php
    }
}
?>