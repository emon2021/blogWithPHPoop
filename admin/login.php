<?php
require_once "../vendor/autoload.php";
if(isset($_REQUEST["submit"]))
{
    $login = new \App\classes\Login;
    $login_err = $login->loginCheck($_REQUEST);
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:06:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Admin -> Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">
     
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <input type="password" class="form-control" name="pwd" placeholder="Password">
            
            <button class="btn btn-lg btn-login btn-block" name="submit" type="submit">Sign in</button>
            
            <p> 
              <?php 
                if(isset($login_err)){
                  echo $login_err;
                }
              ?>
            </p>
        </div>

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


  </body>
</html>
