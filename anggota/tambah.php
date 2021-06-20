<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Anggota
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>No Rekening</label>
                        <input class="form-control" name="no_rek" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input class="form-control" name="nama_anggota" required>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input class="form-control" name="telepon" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" name="status" required>
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
    $sql = $koneksi->query("insert into anggota (no_rek, nama_anggota, telepon, alamat, status) values('$no_rek','$nama_anggota','$telepon','$alamat','$status')");

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