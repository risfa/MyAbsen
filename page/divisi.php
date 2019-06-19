<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
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
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Daftar Baru</li>
      </ol>
      <!-- Example DataTables Card-->
      <?php 
      //EDIT
      if(isset($_GET['edit'])){
        $sql_tampil_data = mysql_query("SELECT * FROM tbDivisi WHERE idDivisi='$_GET[edit]'");
        $tampildata = mysql_fetch_array($sql_tampil_data);
      }
        //DELETE
      if(isset($_GET['delete'])){
         $sqldelete = mysql_query("DELETE FROM tbdivisi WHERE idDivisi='$_GET[delete]'");

          if($sqldelete){
      echo "<script>alert('yes')</script>";
      echo "<script>document.location.href='index.php?menu=3'</script>";
    }else{
      echo "<script>alert('No')</script>";
    }
   }
       ?>
      
      

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i></div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4">
                <form action="proses/divisiKaryawan.php" method="post">
                  <input type="hidden" name="idDivisi" value="<?php echo $tampildata[0] ?>">
                  <div class="form-group">
                    <label for="FormControlTextarea1">Divisi</label>
                    <input type="text" name="divisi" class="form-control" required="" value="<?php echo $tampildata['namaDivisi'] ?>">
                  </div>
                  <?php if($_GET['edit']){ ?>
                  <input type="submit" value="Update" class="btn btn-Primary" name="updateDiv" style="float:left; margin-right: 4px">
                  <a href="index.php?menu=2" class="btn btn-primary">Cancel</a>
                  <?php 
                  }
                  else{ ?>
                  <input type="submit" class="btn btn-primary"  name="simpanUpdate" >
                  <?php }
                  ?>
                </form>
              </div>
              <div class="col-lg-8">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                 
                  <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $No=1;
                    $sqltampil = mysql_query("SELECT * FROM tbdivisi");
                    while($simpan = mysql_fetch_array($sqltampil)){
                   ?>
                  <tr>
                    <td><?php echo $No; ?></td>
                    <td><?php echo $simpan['namaDivisi']; ?></td>

                    <td>
                      <a href="index.php?menu=3&edit=<?php echo $simpan['idDivisi']?>">EDIT</a>
                      <a href="index.php?menu=3&delete=<?php echo $simpan['idDivisi']?>">DELETE</a>
                    </td>
                  </tr>
                  <?php $No++; } ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </body>

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
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
    </div>
  </body>

  </html>
