<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href="?page=anggota&aksi=print" class="btn btn-default" style="margin-bottom: 5px;" target="_blank"><i class="fa fa-print"></i> Print</a> -->
<!--Tables-->
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">No Rekening</th>
                                <th style="text-align: center;">Nama Anggota</th>
                                <th style="text-align: center;">Telepon</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = $koneksi->query("select * from anggota");
                            while ($data = $sql->fetch_assoc()) {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['no_rek']; ?></td>
                                    <td><?= $data['nama_anggota']; ?></td>
                                    <td><?= $data['telepon']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['alamat']; ?></td>
                                    <td><?= $data['status']; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?page=anggota&aksi=edit&id=<?= $data['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
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