<?php
$no_pinjaman = $_GET['no_pinjaman'];

$koneksi->query("delete from angsuran where no_pinjaman='$no_pinjaman' ");
?>

<script type="text/javascript">
    window.location.href = "?page=angsuran";
</script>