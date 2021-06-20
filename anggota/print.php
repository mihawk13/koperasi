<?php
$filename = "data_anggota-(" . date('d-m-Y') . ").doc";

header("Content-Disposition: attachment; filename='$filename'");
header("Content-Type: application/vnd.ms-word");
?>
<h2 style="text-align:center">KOPERASI ARTHA BHASKARA MANDIRI</h2>
<h5 style="text-align:center">Alamat : Jalan Raya Milik Pemerintah</h5>
<hr>
<h3>Data Anggota</h3>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">No Rekening</th>
            <th style="text-align: center;">Nama Anggota</th>
            <th style="text-align: center;">Telepon</th>
            <th style="text-align: center;">Alamat</th>
            <th style="text-align: center;">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = $koneksi->query("select * from anggota");
        while ($data = $sql->fetch_assoc()) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_rek']; ?></td>
                <td><?php echo $data['nama_anggota']; ?></td>
                <td><?php echo $data['telepon']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['status']; ?></td>
            </tr>
        <?php
    }
    ?>
    </tbody>
</table>