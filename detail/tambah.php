<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Detail Tabungan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">

                    <div class="form-group">
                        <label>Jenis Tabungan</label>
                        <select name="jenis_tabungan" id="jenis_tabungan" class="form-control" required>
                            <option value="" selected disabled>--Pilih Jenis Tabungan--</option>
                            <option value="Berjangka">Berjangka</option>
                            <option value="Investasi">Investasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>ID Tabungan</label>
                        <input class="form-control" name="id_tabungan" id="id_tabungan" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" required>
                    </div>

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
                        <label>Jumlah</label>
                        <input class="form-control" name="jumlah" required>
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
$tanggal = @$_POST['tanggal'];
$id_anggota = @$_POST['id_anggota'];
$jenis_tabungan = @$_POST['jenis_tabungan'];
$jumlah = @$_POST['jumlah'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("insert into detail (id_tabungan, tanggal, id_anggota, jenis_tabungan, jumlah) values('$id_tabungan','$tanggal','$id_anggota','$jenis_tabungan','$jumlah')");

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