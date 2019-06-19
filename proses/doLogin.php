<?php
@session_start(); 
	include('config/koneksi.php');

	if(isset($_POST['doLogin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql_login = mysql_query("SELECT * FROM tbAdmin WHERE username = '$username' AND password = '$password'");
		$jumlah_data = mysql_num_rows($sql_login);

		if($jumlah_data == '1'){
			$dataAdmin = mysql_fetch_array($sql_login);
			$_SESSION['username'] = $dataAdmin['namaKaryawan'];
			echo "<script>document.location.href='../index.php?menu=2'</script>";
		}else{
			echo "<script>alert('err')</script>";
			echo "<script>document.location.href='..
			/login.php'</script>";
		}

	}
 ?>