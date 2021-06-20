<a href="?page=angsuran&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href="?page=angsuran&aksi=print" class="btn btn-default" style="margin-bottom: 5px;" target="_blank"><i class="fa fa-print"></i> Print</a> -->

<!--Tables-->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Angsuran
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">ID Pinjaman</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Jumlah Pinjaman</th>
                                <th style="text-align: center;">Jumlah Bayar</th>
                                <th style="text-align: center;">Sisa Pinjaman</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $koneksi->query("SELECT * FROM angsuran a
                            INNER JOIN pinjaman b ON a.id_pinjaman=b.id_pinjaman
                            INNER JOIN anggota c ON b.id_anggota=c.id");
                            $no = 1;
                            while ($data = $sql->fetch_assoc()) { ?>
                                <tr class="odd gradeX">
                                    <td align="center"><?= $no++; ?></td>
                                    <td align="center"><?= $data['id_pinjaman']; ?></td>
                                    <td align="center"><?= $data['nama_anggota']; ?></td>
                                    <td align="center">Rp. <?= number_format($data['jumlah_bayar']); ?></td>
                                    <td align="center">Rp. <?= number_format($data['jumlah_angsuran']); ?></td>
                                    <td align="center">Rp.
                                        <?= number_format($data['sisa_pinjaman']) ?>
                                    <td align="center">
                                        <a href="?page=angsuran&aksi=edit&id_angsuran=<?= $data['id_angsuran']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

<!--End Tables-->