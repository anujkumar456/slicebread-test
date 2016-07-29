<?php
session_start();//session starts here
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>SliceBread </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="dasboard_assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/plugins.css" rel="stylesheet">
    <link href="dasboard_assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="dasboard_assets/css/style.min.css" rel="stylesheet">
      <link href="dasboard_assets/css/parsley-custom.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <script src="dasboard_assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>

<body class="login  animated bounceInDown" data-page="signup ">
    <!-- START SIGNUP BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix">
                    
                    <div class="login-logo ">
                            <h2>SliceBread : Login</h2>
                    </div>
                    <hr>
                    <div class="login-form ">
                        <div class="alert alert-danger" id='err' style="display:none;"  >
                            <h4>Error!</h4>
                            <span id='ms'>Your Error Message goes here</span>
                        </div>
                        <div class="alert alert-success" id='suc' style="display:none;"  >
                            <h4>Success!</h4>
                            <span id='mss'> </span>
                        </div>
                        <!-- END ERROR BOX -->
                       <form  method="post" id="loginform" >
                            <input type="text" placeholder="UserName" name="Username" id="uemail" class="input-field form-control user required" value="" />
                            <input type="password" placeholder="Password" name="Password" id="upwd" class="input-field form-control password required" value="" />
                            <button id="submit-form-login" class="btn btn-login ladda-button" data-style="expand-left" type="submit"><span class="ladda-label">login</span></button>
                        </form>
                        <div class="login-links">
                            <a href="#">Forgot password?</a>
                            <br>
                             <a href="#">Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </div>
    <!-- END SIGNUP BOX -->
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
    
      <script src="dasboard_assets/plugins/parsley/parsley.min.js"></script>
      <script src="dasboard_assets/plugins/parsley/parsley.extend.js"></script>
    
    
<script>
function success_redirect()
{
    window.location.href='index.php';
}

$("#submit-form-login").click(function(e)
{ 

    var form = $('#loginform'); 
    var postData =form.serializeArray();
    var formURL = 'auth.php';
    $.ajax(
    {
       url : formURL,
       type: "POST",
       cache: false,
       dataType: 'json',
       data : postData,
        success:function(data, textStatus, jqXHR) 
        {
			   var msg='';
			   msg=data;
			   $("#err").hide();
			       if (data=="LOGIN SUCCESSFUL"){
                                   $("#suc").show();
                                   document.getElementById('mss').innerHTML=msg;
                                   setTimeout(success_redirect, 2000); // 2 sec delay then redirected to page
				    
                                    throw new Error('go');
				}
				
				if (data!="LOGIN SUCCESSFUL"){
				     $("#err").show();
				    document.getElementById('ms').innerHTML=msg;
				    $("#loginform")[0].reset()
				}
            //data: return data from server
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
        }
    });
	
    e.preventDefault(); //STOP default action
});

</script>
    
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
