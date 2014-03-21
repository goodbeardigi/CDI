<?php 
// Start session 
session_start(); 
 
// Include required functions file 
require_once('inc/functions.inc.php'); 
 
// Check login status... if not logged in, redirect to login screen 
// if (check_login_status() == false) { 
//  redirect('account.php'); 
// } 
          
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>CDI Sports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">


<!--[if lt IE 7]>
	<link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
    <!-- Fav and touch icons -->


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>

<!-- Generic javascript/jquery files -->
<script src="assets/js/jquery.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/responsiveslides.js"></script>
<script type="text/javascript" src="assets/js/jquery.sharrre.min.js"></script>

<!--Scroll js files -->
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="assets/js/jquery.scrollTo.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>

<!-- Main custom script file, everyone use this -->
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/js/upload.js"></script>
<!-- Including the HTML5 Uploader plugin -->
<script src="assets/js/jquery.filedrop.js"></script>
<script src="assets/js/modal.js"></script>
<script src="assets/js/facebook.js"></script>

<body data-spy="scroll" data-target=".top-spy">

<!-- HEADER --> 
<header id="head-top">

  <!-- LOGIN MODAL -->

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <div id="main-form" class="text-center">

        <h2>Login</h2>

        <div id="login-form-container">

             <form id="login-form" method="post" novalidate="" action="">                
                     <input type="text" name="username" id="username" placeholder="info@test.com" required="required">
                     <input type="password" name="password" id="password" placeholder="password" required="required">
                     <div class="error" id="failure" style="display: none;"></div>
                     <a href="#" onclick="login()" class="button-form"><div class="button" id="login">Login</div></a>
             </form>
         </div>
         <div class="clear"></div>
          <span class="separator"><p>Or</p></span>

          <a href="#" onclick="fblogin()"><input id="login-user-fb" class="button" type="submit" value="Connect with Facebook"></a>
          <a href="account.php"><input id="login-user-fb" class="button" type="submit" value="Register an accoount"></a>

          <a id="forgotdetails" href="#">Forgotten login details</a>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END LOGIN MODAL -->

  <div class="head navbar-fixed-top">
    <div class="innerHead">
      <ul>
        <li><a class = "logo" href="http://cdisports.jamescobbett.co.uk"><img src="images/xtv.png" style="padding-top:3px"/></a></li>
        <li class="active"><div class = "navElement"><a href="category.php?id=0">Skate</a></div></li>
        <li><div class = "navElement"><a href="category.php?id=1">Surf</a></div></li>
        <li><div class = "navElement"><a href="category.php?id=2">Sky</a></div></li>
        <li><div class = "navElement"><a href="category.php?id=3">Snow</a></div></li>
        <li>
          <form>
            <span><input type="text" class="searchBar" placeholder="Search..." style = "margin-left: 38px;"></span>
          </form>
        <li>
        <li>
          <div class = "navElement">
            <span><a href="#" onclick="$('#loginModal').modal('show')">Sign In</a></span>
          </div>
        </li>
        <li>
          <div class = "navElement">
            <span><a href="upload.php">Upload</a></span>
            <?php 
            if(isset($_SESSION['username'])){
              echo "Hello ".$_SESSION['username'];
            }?>
          </div>
        </li>
        <li>
            <div id="social-links">
              <span class="icon facebook"><a href="http://www.facebook.com"><img src="images/facebookMain.png" style="padding-left:40px"/></a></span>
            </div>
        </li>
        <li>
            <div id="social-links">
              <span class="icon twitter"><a href="http://www.twitter.com"><img src="images/twitterMain.png"/></a></span>
            </div>
        </li>
    </div>
  </div>

</header>
<!-- / HEADER -->