<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from anggota where id='$id'");

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
                    <input type="hidden" name="id" value="<?= $tampil['id'] ?>" readonly>
                    <div class="form-group">
                        <label>No Rekenging</label>
                        <input class="form-control" name="no_rek" value="<?= $tampil['no_rek'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" value="<?= $tampil['nama_anggota'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input class="form-control" name="telepon" value="<?= $tampil['telepon'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $tampil['email'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="<?= $tampil['alamat'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" name="status" value="<?= $tampil['status'] ?>" required>
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
$id = @$_POST['id'];
$no_rek = @$_POST['no_rek'];
$nama_anggota = @$_POST['nama_anggota'];
$telepon = @$_POST['telepon'];
$email = @$_POST['email'];
$alamat = @$_POST['alamat'];
$status = @$_POST['status'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("UPDATE anggota SET email='$email', no_rek='$no_rek', nama_anggota='$nama_anggota', telepon='$telepon', alamat='$alamat', status='$status',no_rek='$no_rek' WHERE id='$id'");

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