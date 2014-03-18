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
<link href="assets/css/custom.css" rel="stylesheet">


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
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="http://cdisports.jamescobbett.co.uk"><img src="images/logo.jpg"/></a>

          <div id="user-inks">
            <span><a href="#" onclick="$('#loginModal').modal('show')">Sign In</a>//</span>
            <span><a href="upload.php">Upload</a></span>
            <?php 
            if(isset($_SESSION['username'])){
              echo "Hello ".$_SESSION['username'];
            }?>
            <br>
            <a href="inc/logout.inc.php"> Log Out</a>
          </div>

          <div id="social-links">
            <span class="icon facebook"><a href="http://www.facebook.com"><img src="images/facebook-icon.png"/></a></span>
            <span class="icon twitter"><a href="http://www.twitter.com"><img src="images/twitter-icon.png"/></a></span>
          </div>

          <div class="nav-collapse collapse top-spy">
            <ul class="nav" id="topnav">
              <li class="active"><a href="category.php?id=0">Skate</a></li>
              <li><a href="category.php?id=1">Surf</a></li>
              <li><a href="category.php?id=2">Sky</a></li>
              <li><a href="category.php?id=3">Snow</a></li>
              <li><a id="show-search" href="#"><img src="images/search-icon.png"></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div><!---end navbar-inner-->
      <div id="dropdown-search">
      <form id="search-form" method="post" novalidate="" action="search.php">                
          <input id="search" name="term" type="text" placeholder="Search.." >
      </form>
      </div>
    </div>

</div>
</header>
<!-- / HEADER -->