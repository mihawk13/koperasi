<a href="?page=pinjaman&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href="?page=pinjaman&aksi=print" class="btn btn-default" style="margin-bottom: 5px;" target="_blank"><i class="fa fa-print"></i> Print</a> -->

<!--Tables-->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Pinjaman
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                <th style="text-align: center;">Aksi</th>
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
                                    <td align="center">
                                        <a href="?page=pinjaman&aksi=edit&id_pinjaman=<?= $data['id_pinjaman']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

<!--End Tables-->