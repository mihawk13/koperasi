<a href="?page=detail&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href="?page=detail&aksi=print" class="btn btn-default" style="margin-bottom: 5px;" target="_blank"><i class="fa fa-print"></i> Print</a> -->

<!--Tables-->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Tabungan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">ID Tabungan</th>
                                <th style="text-align: center;">Tanggal</th>
                                <th style="text-align: center;">No Rekening</th>
                                <th style="text-align: center;">Nama Anggota</th>
                                <th style="text-align: center;">Jenis Tabungan</th>
                                <th style="text-align: center;">Jumlah</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = $koneksi->query("SELECT a.*,b.nama_anggota,b.no_rek FROM detail a
                            INNER JOIN anggota b ON a.id_anggota=b.id");
                            while ($data = $sql->fetch_assoc()) {
                                ?>
                                <tr class="odd gradeX">
                                    <td align="center"><?= $no++; ?></td>
                                    <td align="center"><?= $data['id_detail']; ?></td>
                                    <td align="center"><?= $data['tanggal']; ?></td>
                                    <td align="center"><?= $data['no_rek']; ?></td>
                                    <td align="center"><?= $data['nama_anggota']; ?></td>
                                    <td align="center"><?= $data['jenis_tabungan']; ?></td>
                                    <td align="center">Rp. <?= number_format($data['jumlah']); ?></td>
                                    <td align="center">
                                        <a href="?page=detail&aksi=edit&id_detail=<?= $data['id_detail']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Edit</a>
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