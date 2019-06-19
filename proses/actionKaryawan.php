<?php 

include('config/koneksi.php');
//CREATE
if(isset($_POST['simpan'])){

			$Nama = $_POST['NamaKar'];
			$noPekerja = $_POST['NoPekerja'];
			$jenisKelamin = $_POST['jenisKelamin'];
			$divkar = $_POST['Divisi'];

		$sqlsimpan = mysql_query("insert into tbKaryawan(idKaryawan,namaKaryawan,jenisKelamin,idDivisi) values('$noPekerja','$Nama','$jenisKelamin','$divkar')");


		if($sqlsimpan){
			echo "<script>alert('SELAMAT DATA ANDA TERSIMPAN')</script>";
			echo "<script>document.location.href='../index.php?menu=2'</script>";
		}else{
			echo "<script>alert('MOHON MAAF DATA ANDA TIDAK TERSIMPAN')</script>";
			echo "<script>document.location.href='../index.php?menu=2'</script>";

		}
	}

	//UPDATE DATA SIMPAN

  if(isset($_POST['update'])){
    $Nama = $_POST['NamaKar'];
      $noPekerja= $_POST['NoPekerja'];
      $jenisKelamin = $_POST['jenisKelamin'];
      $divkar = $_POST['Divisi'];
    	$sqlupdate=mysql_query("UPDATE tbKaryawan SET namaKaryawan = '$Nama', jenisKelamin='$jenisKelamin',idDivisi='$divkar' WHERE idKaryawan='$noPekerja'");

    if($sqlupdate){
    	echo "<script>alert('BERHASIL DI UPDATE')</script>";
    	echo "<script>document.location.href='../index.php?menu=2'</script>";
    }else{
    	echo "<script>alert('TIDAK BERHASIL UPDATE')</script>";
    	echo "<script>document.location.href='../index.php?menu=2'</script>";
    }

}
       
 ?>

 