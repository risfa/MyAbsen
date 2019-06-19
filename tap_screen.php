<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cssproject.css">
 <?php 

      $Tanggal = date('d-m-Y h:i:s');

     ?>
    <title>Home</title>
  </head>
  <body>
      <div class="container">
     <div class="row">
     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
     <div class=" col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
     <center>
        <h2 style="margin-top: 200px;">WELCOME:) TAPPING DULU SOB </h2>
        <form method="post" action="proses/doAbsen.php">
        <input class="form-control" type="text" required=""  placeholder="ID" autofocus="" name="doAbsen" style="height:45px; border-radius:10px; text-align: center; margin-top: 20px;" >
        <!-- <input type="text" name="tanggal" value="<?php echo $Tanggal?>" style="display: none;"> -->
        </center>
        </form>
        <center>
          <div class="btn btn-danger" style="margin-top: 100px; " ><a href="jam_pulang.php" style="color: white;">MAU PULANG?</a></div>
            </center>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" ></div>
      </div>
        
      </div>

      </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>