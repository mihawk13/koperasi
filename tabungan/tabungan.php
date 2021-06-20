<a href="?page=tabungan&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href="?page=tabungan&aksi=print" class="btn btn-default" style="margin-bottom: 5px;" target="_blank"><i class="fa fa-print"></i> Print</a> -->
<!--Tables-->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Tabungan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">No Rekening</th>
                                <th style="text-align: center;">Nama Anggota</th>
                                <th style="text-align: center;">Nama Jenis</th>
                                <th style="text-align: center;">Saldo Awal</th>
                                <th style="text-align: center;">Aksi</th>
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
                                    <td align="center">
                                        <a href="?page=tabungan&aksi=edit&id_tabungan=<?= $data['id_tabungan']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
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