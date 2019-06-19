<!DOCTYPE html>
<html>
<head>
	<title>Register Admin</title>
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
     $sql_tampil_data = mysql_query("SELECT *  FROM  tbadmin  WHERE  idAdmin = '$_GET[edit]'");
     $tampildata = mysql_fetch_array($sql_tampil_data);
   }
   //DELETE
   if(isset($_GET['delete'])){
    $sqldelete= mysql_query("DELETE FROM tbadmin WHERE idAdmin='$_GET[delete]'");

    if($sqldelete){
      echo "<script>alert('BERHASIL DI DELETE')</script>";
      echo "<script>document.location.href='index.php?menu=4'</script>";
    }else{
      echo "<script>alert('TIDAK BERHASIL DI DELETE')</script>";
      echo "<script>document.location.href='index.php?menu=4'</script>";
    }
   }
       ?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i></div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-4">
                <form method="post" action="proses/actionAdmin.php">
                  <input type="hidden" name="idAdmin" value="<?php echo $tampildata[0] ?>">
                  <div class="form-group">

                    <label for="FormControlInput1">Username</label>
                    <input type="text" name="username" class="form-control" required id="exampleFormControlInput1" value="<?php echo $tampildata['username'] ?> ">
                  </div>
                  <div class="form-group">
                    <label for="FormControlInput2">Password</label>
                    <input type="number" name="password" class="form-control" required value="<?php echo $tampildata['password'] ?>">
                  </div>
                  <?php if($_GET['edit']){ ?>
                  <input type="submit" value="Update" class="btn btn-Primary" name="update" style="float:left; margin-right: 4px">
                  <a href="index.php?menu=4" class="btn btn-primary">Cancel</a>
                  <?php 
                  }
                  else{ ?>
                  <input type="submit" class="btn btn-primary"  name="simpan">
                  <?php }
                  ?>

                </form>

              </div>
              <div class="col-lg-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <br>
                          <br>
                          <tr>
                            <th>Nama</th>
                            <th>Password</th>
                            <th> 
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                              <?php 
                             
                              $sqltampil = mysql_query("SELECT * FROM tbadmin");
                              while($simpan = mysql_fetch_array($sqltampil)) {
                              ?>
                            <tr>
                              <td><?php echo $simpan['username']; ?></td>
                              <td><?php echo $simpan['password'] ?></td>
                            <td>
                             <a href="index.php?menu=4&edit=<?php echo $simpan['idAdmin']?>" >EDIT</a>
                             <a href="index.php?menu=4&delete=<?php echo $simpan['idAdmin']?>">DELETE</a>
                           </td>
                            </tr>
                            <?php } ?>
                         </tbody>
                         
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
</body>
</html>