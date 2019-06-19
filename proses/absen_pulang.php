<?php  
include('config/koneksi.php');
//UPDATE
$idKaryawan = $_POST['absen_pulang'];

		$sqlpulang = mysql_query("SELECT * FROM tbKaryawan WHERE idKaryawan='$idKaryawan'");
		$data = mysql_num_rows($sqlpulang);

	if(isset($_POST['absen_pulang'])){	

			$Keterangan = $_POST['Keterangan'];
			$jamPulang = date('h:i:s');
			
			$sql_absen = mysql_query("UPDATE tbAbsensi SET jamPulang ='$jamPulang', Keterangan='$Keterangan' WHERE idKaryawan='$idKaryawan'");

			echo "<script>alert('anda boleh pulang')</script>";
			echo "<script>document.location.href='../jam_pulang.php'</script>";
		}else{
			echo "<script>alert('anda gak boleh pulang')</script>";
			echo "<script>document.location.href='../jam_pulang.php'</script>";
		}

?>