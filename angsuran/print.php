<?php
$filename = "data_angsuran-(" . date('d-m-Y') . ").doc";

header("Content-Disposition: attachment; filename='$filename'");
header("Content-Type: application/vnd.ms-word");
?>
<h2 style="text-align:center">KOPERASI ARTHA BHASKARA MANDIRI</h2>
<h5 style="text-align:center">Alamat : Jalan Raya Milik Pemerintah</h5>
<hr>
<h3>Data Angsuran Pinjaman</h3>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">No Pinjaman</th>
            <th style="text-align: center;">Nama</th>
            <th style="text-align: center;">Jumlah Pinjaman</th>
            <th style="text-align: center;">Jumlah Pokok</th>
            <th style="text-align: center;">Bunga Pinjaman</th>
            <th style="text-align: center;">Jumlah Bayar</th>
            <th style="text-align: center;">Sisa Pinjaman</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = $koneksi->query("select * from angsuran");
        while ($data = $sql->fetch_assoc()) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_pinjaman']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td>Rp. <?php echo $data['jumlah_pinjaman']; ?></td>
                <td>
                    <?php
                    $jumlah_pokok = $data['jumlah_pinjaman'];
                    echo "Rp. " . $jumlah_pokok;
                    ?>
                </td>
                <td><?php echo $data['bunga_pinjaman']; ?> %</td>
                <td>Rp. <?php echo $data['jumlah_bayar']; ?></td>
                <td>
                    <?php
                    $jml_pnjm = $data['jumlah_pinjaman'];
                    $bunga_pnjm = $data['bunga_pinjaman'];
                    $jml_byr = $data['jumlah_bayar'];
                    $bunga = $bunga_pnjm / 100;

                    $hitung = $jml_byr - ($jml_pnjm + $bunga);

                    echo "Rp. <font color='red'>$hitung</font>";
                    ?>
                <td>
            </tr>
        <?php
    }
    ?>
    </tbody>
</table>