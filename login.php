<?php
include "koneksidb.php";
$cari = mysqli_query($koneksi, "select* FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu = mysqli_num_rows($cari);
$r = mysqli_fetch_array($cari);

if ($ketemu > 0) {
	session_start();
	$_SESSION['username']     		= $r['username'];
	$_SESSION['password']    	    = $r['password'];
	$_SESSION['leveluser']	    	= $r['level_user'];

	if ($_SESSION['leveluser'] == 1) {
		header('location:link.php?page=dashboard');
	}
} else {
	header("location:index.php?pesan=gagal") or die();;
}
