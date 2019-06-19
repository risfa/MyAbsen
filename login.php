<?php 
  @session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="cssproject.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Login</title>
</head>
<body>
  <div class="container">


    <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">&nbsp;</div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

       <center>
        <h1 style=" margin-top:200px;margin-bottom: 20px;">IMAGE</h1>

        <form action="proses/doLogin.php" method="post">
          <div class="form-group">

            <input type="" class="form-control" id="exampleDropdownFormEmail2" placeholder="Username" name="username" style="height:45px; width:500px; border-radius:10px; text-align:center;">
            <br>
            <div class="form-group">
              <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="password" style="height:45px; width:500px; border-radius:10px; text-align:center;">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck2">
              <label class="form-check-label" for="dropdownCheck2">
                Remember me
              </label>
            </div>
            <input type="submit" name="doLogin" value="Sign In">
          </form>
        </center>
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">&nbsp;</div>



    </div>
  </div>
</div>


</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
