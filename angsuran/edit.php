<?php

$id_angsuran = $_GET['id_angsuran'];

$sql = $koneksi->query("SELECT a.*,b.jumlah_bayar,c.nama_anggota FROM angsuran a
INNER JOIN pinjaman b ON a.id_pinjaman=b.id_pinjaman
INNER JOIN anggota c ON b.id_anggota=c.id
WHERE a.id_angsuran = '$id_angsuran'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Angsuran
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <input type="hidden" name="id_angsuran" value="<?= $id_angsuran ?>" readonly>
                    <div class="form-group">
                        <label>ID Pinjaman | Nama Anggota</label>
                        <input class="form-control" readonly value="<?= $tampil['id_pinjaman'] . ' | ' . $tampil['nama_anggota'] ?>">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input class="form-control" readonly value="<?=$tampil['jumlah_bayar']?>">
                    </div>

                    <div class="form-group">
                        <label>Sisa Pinjaman</label>
                        <input class="form-control" name="sisa_pinjaman" readonly value="<?=$tampil['sisa_pinjaman'] + $tampil['jumlah_angsuran']?>">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Angsuran</label>
                        <input class="form-control" name="jumlah_angsuran" required value="<?=$tampil['jumlah_angsuran']?>">
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
$id_angsuran = @$_POST['id_angsuran'];
$jumlah_angsuran = @$_POST['jumlah_angsuran'];
$sisa_pinjaman = @$_POST['sisa_pinjaman'] - @$_POST['jumlah_angsuran'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("UPDATE angsuran SET jumlah_angsuran='$jumlah_angsuran', sisa_pinjaman='$sisa_pinjaman' WHERE id_angsuran='$id_angsuran'");

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