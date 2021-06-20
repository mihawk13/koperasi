<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Angsuran
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>ID Pinjaman | Nama Anggota</label>
                        <select name="id_pinjaman" id="id_pinjaman" class="form-control">
                            <option value="" selected disabled>--Pilih Pinjaman--</option>
                            <?php $sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM pinjaman a
                            INNER JOIN anggota b ON a.id_anggota=b.id WHERE a.status = 'BELUM LUNAS'");
                            while ($data = $sql->fetch_assoc()) { ?>
                                <option value="<?= $data['id_pinjaman'] ?>"><?= $data['id_pinjaman'] . ' | ' . $data['nama_anggota'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input class="form-control" id="jmlPinjaman" readonly>
                    </div>

                    <div class="form-group">
                        <label>Sisa Pinjaman</label>
                        <input class="form-control" name="sisa_pinjaman" id="sisa_pinjaman" readonly>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Angsuran</label>
                        <input class="form-control" name="jumlah_angsuran" required>
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
$jumlah_angsuran = @$_POST['jumlah_angsuran'];
$sisa_pinjaman = @$_POST['sisa_pinjaman'] - @$_POST['jumlah_angsuran'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("INSERT INTO angsuran (id_pinjaman, jumlah_angsuran, sisa_pinjaman) values('$id_pinjaman','$jumlah_angsuran','$sisa_pinjaman')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=angsuran";
        </script>
<?php
    }
}
?>