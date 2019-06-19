<?php 
	include('config/koneksi.php');

	if(isset($_POST['doAbsen'])){

		$idKaryawan =$_POST['doAbsen'];

		$sqlcari = mysql_query("SELECT * FROM tbKaryawan WHERE idKaryawan= '$idKaryawan'");
		$jumlah_data= mysql_num_rows($sqlcari);

		if($jumlah_data=='1'){
			$jamMasuk = date('h:i:s');
			$Tanggal = date('d-m-Y');

		$sql_absen = mysql_query("INSERT INTO tbAbsensi(idAbsensi,idKaryawan,jamMasuk,Tanggal) values(NULL,'$idKaryawan','$jamMasuk','$Tanggal') ");


		while($tampil = mysql_fetch_array($sqlcari)){

			echo "<script>alert(selamat pagi!".$tampil['namaKaryawan']."')</script>";
			echo "<script>document.location.href='../tap_screen.php'</script>";
		}
	}else {
			
		echo "<script>alert('err')</script>";
		echo "<script>document.location.href='../tap_screen.php'</script>";
		
	}		
 }
 
?>
<!-- <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script type="text/javascript" src="dist/sweetalert.min.js"></script>	
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->