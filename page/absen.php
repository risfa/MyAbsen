<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Absensi</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <input type="text" name="daterange" value="01/01/2018 - 12/1/2018" />
               
                <script type="text/javascript">
                  $(function() {
                    $('input[name="daterange"]').daterangepicker();
                  });
                </script>
                <br>
                <br>
                <tr>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
               <?php 
                    $sqldata = mysql_query("SELECT * FROM tbabsensi ta INNER JOIN tbKaryawan tk ON tk.idKaryawan = ta.idKaryawan INNER JOIN tbdivisi td ON td.idDivisi = td.idDivisi");
                    while($Data = mysql_fetch_array($sqldata)){
                ?>
              <tr>
                <td><?php echo $Data['namaKaryawan']; ?></td>
                <td><?php echo $Data['namaDivisi'];?></td>
                <td><?php echo $Data['jamMasuk'];?></td>
                <td><?php echo $Data['jamPulang'];?></td>
                <td><?php echo $Data['Tanggal'];?></td>
                <td><?php echo $Data['Keteragan'];?></td>
               
              </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->