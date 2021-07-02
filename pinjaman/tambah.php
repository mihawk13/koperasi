<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Pinjaman
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
                        <label>Jumlah Pinjaman</label>
                        <input class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input class="form-control" name="tanggal_pinjam" type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input class="form-control" name="tanggal_selesai" type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Jangka Waktu (bulan)</label>
                        <input class="form-control" name="jangka_waktu" required>
                    </div>
                    <div class="form-group">
                        <label>Bunga (%)</label>
                        <input class="form-control" name="bunga" id="bunga" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Bayar</label>
                        <input class="form-control" name="jumlah_bayar" id="jumlah_bayar" required readonly>
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
// $no_rek = @$_POST['no_rek'];
$id_anggota = @$_POST['id_anggota'];
$jumlah_pinjaman = @$_POST['jumlah_pinjaman'];
$jangka_waktu = @$_POST['jangka_waktu'];
$tanggal_pinjam = @$_POST['tanggal_pinjam'];
$tanggal_selesai = @$_POST['tanggal_selesai'];
$bunga = @$_POST['bunga'];
$jumlah_bayar = @$_POST['jumlah_bayar'];

$simpan = @$_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("INSERT INTO pinjaman (id_anggota, jumlah_pinjaman, tanggal_pinjam, tanggal_selesai, jangka_waktu, bunga, jumlah_bayar) values('$id_anggota','$jumlah_pinjaman','$tanggal_pinjam','$tanggal_selesai','$jangka_waktu','$bunga','$jumlah_bayar')");

    $hasil = $koneksi->query("SELECT email FROM anggota WHERE id = '$id_anggota'");
    $data = mysqli_fetch_assoc($hasil);

    require_once './vendor/autoload.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('sedotppk@gmail.com')
        ->setPassword('k1ll3rb33');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Pemberitahuan dari Artha Bhaskara Mandiri'))
        ->setFrom(['no-reply@artha-baskara-mandiri.com' => 'Artha Bhaskara Mandiri'])
        ->setTo($data['email'])
        // ->setBody('<p>Peminjaman Dana<p>')
        ->addPart('<p>Anda telah meminjam dana sebesar Rp. ' . number_format($jumlah_bayar) . '</p></br><p><strong>Artha Bhaskara Mandiri,</strong></p></br><p><strong>Terima Kasih</strong></p>', 'text/html');

    // Send the message
    $result = $mailer->send($message);
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=pinjaman";
    </script>
<?php } ?>