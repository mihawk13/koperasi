<h2 style="text-align:center">KOPERASI ARTHA BHASKARA MANDIRI</h2>
<h5 style="text-align:center">Alamat : Jalan Raya Milik Pemerintah</h5>
<hr>
<h3>Laporan Tabungan</h3>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">No Rekening</th>
            <th style="text-align: center;">Nama Anggota</th>
            <th style="text-align: center;">Nama Jenis</th>
            <th style="text-align: center;">Saldo Awal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM tabungan a
                            INNER JOIN anggota b ON a.id_anggota=b.id");
        while ($data = $sql->fetch_assoc()) {
        ?>
            <tr class="odd gradeX">
                <td align="center"><?= $no++; ?></td>
                <td align="center"><?= $data['no_rek']; ?></td>
                <td align="center"><?= $data['nama_anggota']; ?></td>
                <td align="center"><?= $data['nama_jenis']; ?></td>
                <td align="center">Rp. <?= number_format($data['saldo_awal']); ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>