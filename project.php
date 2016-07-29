<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="dasboard_assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="dasboard_assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/plugins.min.css" rel="stylesheet">
    <link href="dasboard_assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <link href="dasboard_assets/css/animate-custom.css" rel="stylesheet">
    <script src="dasboard_assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     
</head>

<body class="login fade-in" data-page="login">
     
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row"><div class="col-md-3 col-md-offset-3"  style="float:right"><strong><a href="logout.php">Logout</a></strong></div></div>
<?php
if(!$_SESSION['uid'])
{
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
        ?>
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
             <div class="alert alert-danger fade in" >
             <h4><strong> Your session has expired! <a href='login.php'>Login here</a> </strong></h4>
             </div>
          </div>          
        </div>
        <?php
        }
        else { 
?>
        <div class="row">
          <div class="col-md-12">
             <div class="alert alert-info fade in" >
             <h4><strong> Project List</strong></h4>
             <p>Project 1</p>
             <p>Project 2</p>
             </div>
          </div>          
        </div>
<?php
    }
}
?>

    </div>
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="dasboard_assets/plugins/jquery-1.11.js"></script>
    <script src="dasboard_assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="dasboard_assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="dasboard_assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="dasboard_assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="dasboard_assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="dasboard_assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="dasboard_assets/plugins/bootstrap-loading/lada.min.js"></script>
    <script src="dasboard_assets/js/account.js"></script>
   
</body>

</html>
