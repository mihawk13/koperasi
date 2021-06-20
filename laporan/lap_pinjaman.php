<h2 style="text-align:center">KOPERASI ARTHA BHASKARA MANDIRI</h2>
<h5 style="text-align:center">Alamat : Jalan Raya Milik Pemerintah</h5>
<hr>
<h3>Laporan Pinjaman</h3>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">ID Pinjaman</th>
            <th style="text-align: center;">Nama Anggota</th>
            <th style="text-align: center;">Tanggal Pinjam</th>
            <th style="text-align: center;">Tanggal Selesai</th>
            <th style="text-align: center;">Jangka Waktu</th>
            <th style="text-align: center;">Jumlah Pinjaman</th>
            <th style="text-align: center;">Bunga</th>
            <th style="text-align: center;">Jumlah Bunga</th>
            <th style="text-align: center;">Jumlah Bayar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM pinjaman a
                            INNER JOIN anggota b ON a.id_anggota=b.id");
        while ($data = $sql->fetch_assoc()) {
        ?>
            <tr class="odd gradeX">
                <td align="center"><?= $data['id_pinjaman']; ?></td>
                <td align="center"><?= $data['nama_anggota']; ?></td>
                <td align="center"><?= $data['tanggal_pinjam']; ?></td>
                <td align="center"><?= $data['tanggal_selesai']; ?></td>
                <td align="center"><?= $data['jangka_waktu']; ?> Bulan</td>
                <td align="center">Rp. <?= number_format($data['jumlah_pinjaman']); ?></td>
                <td align="center"><?= $data['bunga'] . ' %'; ?></td>
                <td align="center">Rp. <?= number_format($data['jumlah_pinjaman'] * $data['bunga'] / 100) ?></td>
                <td align="center">Rp. <?= number_format($data['jumlah_bayar']); ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>