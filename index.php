<?php 
  @session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include("proses/config/koneksi.php");
 ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
  <script src="vendor/jquery/jquery.min.js"></script>

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->

  <link href="css/sb-admin.css" rel="stylesheet">
</head>


<body>  
  <?php include("navigation.php"); 
  $sesi_user = $_SESSION['username'];
  if($sesi_user !=""){
  switch ( $_GET['menu'] ) {
    case '1':
    include('page/absen.php');
    break;
    case '2':
    include('page/register.php');
    break;
    case '3':
    include('page/divisi.php');
    case '4':
      include('page/regAdmin.php');
      break;
    break;
    
  }
  if (empty($_GET['menu'])) {
    echo "<script> document.location.href='index.php?menu=1'</script>";
  }
  }else{
    
    echo "<script> document.location.href='login.php?menu=1'</script>";
  
  }
  ?>
</body>
<!-- <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/1/jquery.min.js"></script> -->
<script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</div>
</body>

</html>
