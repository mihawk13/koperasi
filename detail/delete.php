<?php
$no_rek = $_GET['no_rek'];

$koneksi->query("delete from detail where no_rek='$no_rek' ");
?>

<script type="text/javascript">
    window.location.href = "?page=detail";
</script>