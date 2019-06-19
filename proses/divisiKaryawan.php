<?php 
	include('config/koneksi.php');
	//CREATE
	if(isset($_POST['simpanUpdate'])){

		$namaDiv = $_POST['divisi'];

		$sqlsimpan = mysql_query("insert into tbdivisi(idDivisi,namaDivisi) values(NULL,'$namaDiv')");

		if($sqlsimpan){
			echo "<script>alert('BERHASIL')</script>";
			echo "<script>document.location.href='../index.php?menu=3'</script>";
		}else{
			echo "<script>alert('TIDAK BERHASIL')</script>";
			echo "<script>document.location.href='../index.php?menu=3'</script>";
		}

	}

	// UPDATE DATA SIMPAN

	if(isset($_POST['updateDiv'])){

		$namaDiv = $_POST['divisi'];

		$sqlupdate = mysql_query("UPDATE tbdivisi SET namaDivisi='$namaDiv' WHERE idDivisi='$_POST[idDivisi]'");

		if($sqlupdate){
			echo "<script>alert('ya')</script>";
			echo "<script>document.location.href='../index.php?menu=3'</script>";
		}else{
			echo "<script>alert('no')</script>";
			echo "<script>document.location.href='../index.php?menu=3'</script>";
		}

	}
 ?>