<?php

$no_rek = $_GET['no_rek'];

$sql = $koneksi->query("select*from anggota where no_rek='$no_rek'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data Anggota
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>No Rekenging</label>
                        <input class="form-control" name="no_rek" value="<?php echo $tampil['no_rek'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" value="<?php echo $tampil['nama_anggota'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input class="form-control" name="telepon" value="<?php echo $tampil['telepon'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" name="status" value="<?php echo $tampil['status'] ?>" required>
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
$no_rek = @$_POST['no_rek'];
$nama_anggota = @$_POST['nama_anggota'];
$telepon = @$_POST['telepon'];
$alamat = @$_POST['alamat'];
$status = @$_POST['status'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("update anggota set no_rek='$no_rek', nama_anggota='$nama_anggota', telepon='$telepon', alamat='$alamat', status='$status' where no_rek='$no_rek'");

    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=anggota";
        </script>
    <?php
}
}
?>