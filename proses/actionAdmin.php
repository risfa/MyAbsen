<?php 

include('config/koneksi.php');
//CREATE
if(isset($_POST['simpan'])){

			$username = $_POST['username'];
			$password = $_POST['password'];
			

		$sqlsimpan=mysql_query("insert into tbadmin(idAdmin,username,password) values(NULL,'$username','$password')");

		if($sqlsimpan){
			echo "<script>alert('SELAMAT DATA ANDA TERSIMPAN')</script>";
			echo "<script>document.location.href='../index.php?menu=4'</script>";
		}else{
			echo "<script>alert('MOHON MAAF DATA ANDA TIDAK TERSIMPAN')</script>";
			echo "<script>document.location.href='../index.php?menu=4'</script>";

		}
	}

	//UPDATE DATA SIMPAN

  if(isset($_POST['update'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
    $sqlupdate=mysql_query("UPDATE tbadmin SET username = '$username', password='$password' WHERE idAdmin='$_POST[idAdmin]'");

    if($sqlupdate){
    	echo "<script>alert('BERHASIL DI UPDATE')</script>";
     	echo "<script>document.location.href='../index.php?menu=4'</script>";
    }else{
    	 echo "<script>alert('TIDAK BERHASIL UPDATE')</script>";
    	 echo "<script>document.location.href='../index.php?menu=4'</script>";
}
}
       
 ?>