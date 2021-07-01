<?php

include 'koneksidb.php';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koperasi Artha Bhaskara Mandiri</title>
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet" />
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" index.php">KOPERASI</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust fa fa-power-off fa-1x">&nbsp;Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/logo.png" class="user-image img-responsive" />
                    </li>

                    <li>
                        <a href="?page=dashboard"><i class="fa fa-bar-chart fa-1x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="?page=anggota"><i class="fa fa-user fa-1x"></i> Anggota</a>
                    </li>

                    <li>
                        <a href="?page=tabungan"><i class="fa fa-file fa-1x"></i> Tabungan</a>
                    </li>

                    <li>
                        <a href="?page=detail"><i class="fa fa-file fa-1x"></i> Detail Tabungan</a>
                    </li>

                    <li>
                        <a href="?page=pinjaman"><i class="fa fa-calendar-o fa-1x"></i> Pinjaman</a>
                    </li>

                    <li>
                        <a href="?page=angsuran"><i class="fa fa-money fa-1x"></i> Angsuran Pinjaman</a>
                    </li>
                    <!-- 
                    <li>
                        <a href="?page=laporan"><i class="fa fa-file-text fa-1x"></i> Laporan</a>
                    </li> -->
                    <li>
                        <a href="javascript">
                            <span class="nav-icon">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </span>
                            <span class="nav-text"> Laporan</span>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="?page=laporan&aksi=tabungan">
                                    <span class="nav-text">Laporan Tabungan</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=laporan&aksi=pinjaman">
                                    <span class="nav-text">Laporan Pinjaman</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <?php
                        $page = @$_GET['page'];
                        $aksi = @$_GET['aksi'];
                        if ($page == "anggota") {
                            if ($aksi == "") {
                                include "anggota/anggota.php";
                            } elseif ($aksi == "tambah") {
                                include "anggota/tambah.php";
                            } elseif ($aksi == "edit") {
                                include "anggota/edit.php";
                            } elseif ($aksi == "delete") {
                                include "anggota/delete.php";
                            } elseif ($aksi == "print") {
                                include "anggota/print.php";
                            }
                        } elseif ($page == "tabungan") {
                            if ($aksi == "") {
                                include "tabungan/tabungan.php";
                            } elseif ($aksi == "tambah") {
                                include "tabungan/tambah.php";
                            } elseif ($aksi == "edit") {
                                include "tabungan/edit.php";
                            } elseif ($aksi == "delete") {
                                include "tabungan/delete.php";
                            } elseif ($aksi == "print") {
                                include "tabungan/print.php";
                            }
                        } elseif ($page == "detail") {
                            if ($aksi == "") {
                                include "detail/detail_tabungan.php";
                            } elseif ($aksi == "tambah") {
                                include "detail/tambah.php";
                            } elseif ($aksi == "edit") {
                                include "detail/edit.php";
                            } elseif ($aksi == "delete") {
                                include "detail/delete.php";
                            } elseif ($aksi == "print") {
                                include "detail/print.php";
                            }
                        } elseif ($page == "pinjaman") {
                            if ($aksi == "") {
                                include "pinjaman/pinjaman.php";
                            } elseif ($aksi == "tambah") {
                                include "pinjaman/tambah.php";
                            } elseif ($aksi == "edit") {
                                include "pinjaman/edit.php";
                            } elseif ($aksi == "delete") {
                                include "pinjaman/delete.php";
                            } elseif ($aksi == "print") {
                                include "pinjaman/print.php";
                            }
                        } elseif ($page == "angsuran") {
                            if ($aksi == "") {
                                include "angsuran/angsuran.php";
                            } elseif ($aksi == "edit") {
                                include "angsuran/edit.php";
                            } elseif ($aksi == "tambah") {
                                include "angsuran/tambah.php";
                            } elseif ($aksi == "delete") {
                                include "angsuran/delete.php";
                            } elseif ($aksi == "print") {
                                include "angsuran/print.php";
                            }
                        } elseif ($page == "dashboard") {
                            if ($aksi == "") {
                                include "dashboard/dashboard.php";
                            }
                        } elseif ($page == "laporan") {
                            if ($aksi == "tabungan") {
                                include "laporan/lap_tabungan.php";
                            } elseif ($aksi == "pinjaman") {
                                include "laporan/lap_pinjaman.php";
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <!-- <script src="assets/js/dataTables/jquery.dataTables.js"></script> -->
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

    <!-- <script src="assets/js/dataTables/buttons.flash.min.js"></script>
    <script src="assets/js/dataTables/buttons.html5.min.js"></script>
    <script src="assets/js/dataTables/buttons.print.min.js"></script>
    <script src="assets/js/dataTables/dataTables.buttons.min.js"></script>
    <script src="assets/js/dataTables/jszip.min.js"></script>
    <script src="assets/js/dataTables/pdfmake.min.js"></script>
    <script src="assets/js/dataTables/vfs_fonts.js"></script> -->

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();

            $('#dataTables-exp').dataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pdf', 'print'
                ]
            });

            $('#jenis_tabungan').on('change', function() {
                $.ajax({
                    type: 'GET',
                    url: 'kode_otomatis.php',
                    data: 'jenis=' + this.value,
                    success: function(res) {
                        $('#id_tabungan').val(res);
                    }
                });
            });

            $('#bunga').on('input change paste keyup', function() {
                let jmlPinjam = parseInt($('#jumlah_pinjaman').val());
                let bunga = parseInt(this.value);
                let jmlBayar = jmlPinjam + (jmlPinjam * (bunga / 100));
                $('#jumlah_bayar').val(jmlBayar);

            });

            $('#id_pinjaman').on('change', function() {
                let idPinjaman = this.value;
                $.ajax({
                    type: 'GET',
                    url: 'pinjaman/getSisaPinjaman.php',
                    data: 'idPinjaman=' + idPinjaman,
                    success: function(res) {
                        // console.log(res);
                        let hasil = JSON.parse(res);
                        // console.log(hasil);
                        $('#jmlPinjaman').val(hasil[0]);
                        const sisa = hasil[0] - hasil[1];
                        $('#sisa_pinjaman').val(sisa);
                    }
                });
            });

        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <!-- <script src="assets/js/custom.js"></script> -->

</body>

</html>