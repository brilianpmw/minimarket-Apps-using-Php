<?php
include('../koneksi/koneksi.php');
$kd_barang=$_GET['kd_barang'];
$no_faktur=$_GET['no_faktur'];
$query_hapus="DELETE FROM tabel_rinci_pembelian WHERE kd_barang='".$kd_barang."' AND no_faktur_pembelian='".$no_faktur."'";
$hapus=mysql_query($query_hapus);
if($hapus){
	header('location:../index.php?menu=pembelian');}
	else{
		echo"<script language='javascript'>
		window.alert('Gagal Menghapus Data');javascript:history.back();
		</script>";}
		?>