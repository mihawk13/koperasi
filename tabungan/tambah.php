<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Tabungan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <select name="id_anggota" class="form-control">
                            <option value="" selected disabled>--Pilih Anggota--</option>
                            <?php $sql = $koneksi->query("select * from anggota");
                            while ($data = $sql->fetch_assoc()) { ?>
                                <option value="<?= $data['id'] ?>"><?= $data['nama_anggota'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Jenis</label>
                        <input class="form-control" name="nama_jenis" required>
                    </div>

                    <div class="form-group">
                        <label>Saldo Awal</label>
                        <input class="form-control" name="saldo_awal" required>
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
// $id_tabungan = @$_POST['id_tabungan'];
// $no_rek = @$_POST['no_rek'];
$id_anggota = @$_POST['id_anggota'];
// $kode_jenis = @$_POST['kode_jenis'];
$nama_jenis = @$_POST['nama_jenis'];
$saldo_awal = @$_POST['saldo_awal'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("insert into tabungan (id_anggota, nama_jenis, saldo_awal) values('$id_anggota','$nama_jenis','$saldo_awal')");

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