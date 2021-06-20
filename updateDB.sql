USE `koperasi_abm`;

ALTER TABLE `koperasi_abm`.`detail` CHANGE `id_tabungan` `id_detail` VARCHAR(20) CHARSET latin1 COLLATE latin1_swedish_ci NOT NULL; 
ALTER TABLE `koperasi_abm`.`anggota` ADD COLUMN `id` INT(10) NOT NULL AUTO_INCREMENT FIRST, DROP PRIMARY KEY, ADD PRIMARY KEY (`id`);
ALTER TABLE `koperasi_abm`.`detail` CHANGE `id_tabungan` `id_tabungan` VARCHAR(20) NOT NULL;
ALTER TABLE `koperasi_abm`.`detail` CHANGE `nama_anggota` `id_anggota` INT(10) NOT NULL AFTER `id_tabungan`; 
ALTER TABLE `koperasi_abm`.`detail` DROP COLUMN `no_rek`; 
ALTER TABLE `koperasi_abm`.`tabungan` DROP COLUMN `no_rek`, DROP COLUMN `kode_jenis`, CHANGE `nama_anggota` `id_anggota` INT(10) NOT NULL; 
ALTER TABLE `koperasi_abm`.`pinjaman` CHANGE `no_rek` `id_pinjaman` INT(20) NOT NULL AUTO_INCREMENT, CHANGE `nama_anggota` `id_anggota` INT(10) NOT NULL; 
ALTER TABLE `koperasi_abm`.`angsuran` CHANGE `no_pinjaman` `id_angsuran` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, CHANGE `nama` `id_pinjaman` INT(10) NOT NULL; 
ALTER TABLE `koperasi_abm`.`pinjaman` DROP COLUMN `sisa_pinjaman`; 
ALTER TABLE `koperasi_abm`.`pinjaman` DROP COLUMN `jumlah_bunga`; 
ALTER TABLE `koperasi_abm`.`angsuran` DROP COLUMN `jumlah_pinjaman`, DROP COLUMN `jumlah_pokok`, DROP COLUMN `bunga_pinjaman`; 
ALTER TABLE `koperasi_abm`.`pinjaman` ADD COLUMN `status` ENUM('LUNAS','BELUM LUNAS') DEFAULT 'BELUM LUNAS' NOT NULL AFTER `jumlah_bayar`; 
ALTER TABLE `koperasi_abm`.`angsuran` CHANGE `jumlah_bayar` `jumlah_angsuran` INT(20) NOT NULL; 
