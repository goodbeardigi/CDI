// SMOOTH SECTIONS SCROLL + PARALLAX PLUGIN
//http://www.ianlunn.co.uk/plugins/jquery-parallax/
jQuery(document).ready(function(){
  $(document).ready(function() {
  $('#simple-menu').sidr({
    onOpen: function(name) {
        $( ".navbar-fixed-top" ).addClass( "nav-left" );
        $( ".navbar-fixed-top" ).removeClass( "nav-return" );
      },
    onClose: function(name) {
        $( ".navbar-fixed-top" ).addClass( "nav-return" );
        $( ".navbar-fixed-top" ).removeClass( "nav-left" );
      }
    });
});

  jQuery('#topnav').localScroll(3000);
  jQuery('.gobtnwrapper').localScroll(3000);
  $( ".video-overlay" ).hover(
  function() {
     $('.overlay',$(this).parent('div:first')).hide();
  }, function() {
    $('.overlay',$(this).parent('div:first')).show();
  }
);
  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  //jQuery('#section-1').parallax("50%", 0.1);
  //jQuery('#section-2').parallax("50%", 0.1);
  //jQuery('#section-3').parallax("50%", 0.1);

})


// NICE Scroll plugin 
//scroll bar custom
jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#ffffff"});
  }
);

//Minimizes the menu on the mobile after clicking
jQuery('.nav-collapse .nav > li > a').click(function(){
    jQuery('.collapse.in').removeClass('in').css('height', '0');
  });

jQuery('.carousel').carousel({
  interval: 7000
})

//Show top search 
//Slide down and fade in animations
var i=0;
$(document).ready(function() {
    $('#show-search').click(function(){
      if(i == 0){
        $('#dropdown-search').animate({height: 50},800);
        $('#search').fadeIn( "fast", function() {
          // complete
        });
      $('#search').focus();
      i=1;
    } else {
        $('#dropdown-search').animate({height: 7},800);
        $('#search').fadeOut( "fast", function() {
          // complete
        });
        $('#search').focus();
        i=0;
    }
    });
});

$('#search').keypress(function (e) {
  if (e.which == 13) {
    input = $('#search').val();
  //set
    alert('test - ' + input);
        window.location = "/search?=" + input;
        return false; 
  }
});


//Video grid tabbed
$('.myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

function hide(){
    $('#loginModal').modal('hide');
}

//Intercept Upload form
function processUploadForm() {
    //if (e.preventDefault) e.preventDefault();
  // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/uploadform.php";
    var form = document.getElementById("upload-form");
    var data = new FormData(form);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failure");
                console.log(message);
                if (message == '-1'){  
                  document.getElementById('main-form').innerHTML = '<h2>VIDEO UPLOADED</h2><a href="/video.php?id='+response+'" onclick="#" class="loginButton">Go to video</a><div class="orLine">OR</div><a href="#" onclick="hide()" class="loginButton">Upload another</a>';            
                  $('#loginModal').modal('show');
                  window.setTimeout(function(){$('#loginModal').modal('hide');},700);
                  document.getElementById('main-form').innerHTML = '<h2>SIGN IN</h2><div id="login-form-container"><form id="login-form" method="post" novalidate="" action=""><input type="text" name="username" id="username" placeholder="Username" required="required" style="width:288px !important"><input type="password" name="password" id="password" placeholder="Password" required="required" style="width:288px"><div class="error" id="failure" style="display: none;"></div><a href="#" onclick="login()" class="loginButton">Sign in</a><div class="orLine">OR</div><a href="#" onclick="fblogin()" class = "fbLoginButton">Sign in with Facebook</a><a id="forgotdetails" href="#">Forgot your password?</a><div class = "signUpLink"><a href="account.php" id="forgotdetails">Sign up</a></div></form></div>';            
                }
            }
        }
    };
        // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);



    return false;
}

function signin(){
  document.getElementById('main-form').innerHTML = '<h2>SIGN IN</h2><div id="login-form-container"><form id="login-form" method="post" novalidate="" action=""><input type="text" name="username" id="username" placeholder="Username" required="required" style="width:288px !important"><input type="password" name="password" id="password" placeholder="Password" required="required" style="width:288px"><div class="error" id="failure" style="display: none;"></div><a href="#" onclick="login()" class="loginButton">Sign in</a><div class="orLine">OR</div><a href="#" onclick="fblogin()" class = "fbLoginButton">Sign in with Facebook</a><a id="forgotdetails" href="#">Forgot your password?</a><div class = "signUpLink"><a href="account.php" id="forgotdetails">Sign up</a></div></form></div>';            
  $('#loginModal').modal('show');
}

function login(username, password, reg){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/login.inc.php ";
    if (typeof username != 'undefined') {
          var data = new FormData();
          data.append("username", username);
          data.append("password", password);

        } else {
          //FORM VALIDATION
          var x=document.forms["login-form"]["username"].value;
          if (x==null || x=="")
          {
            document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! You haven't entered a username.<h1></div>";      
            jQuery('#failure').slideDown("slow");                    
            return false;
          }
          var x=document.forms["login-form"]["password"].value;
          if (x==null || x=="")
          {
              document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! You haven't entered a password.<h1></div>";      
            jQuery('#failure').slideDown("slow");                    
            return false;
          }

          var form = document.getElementById("login-form");
          var data = new FormData(form);
    }
    //var form = document.getElementById("loginForm");
    //var data = new FormData(form);
    //var html = document.getElementById("source").innerHTML;
  //data = 'html='+escape(document.getElementById("source").innerHTML);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failure");
                console.log(message);
                if (message == -1){
                  if(reg == 1){
                    document.getElementById('main-form').innerHTML = '<h2>Account created</h2><a href="http://cdisports.jamescobbett.co.uk" onclick="#" class="loginButton">Go home</a><div class="orLine">OR</div><a href="/upload.php" class="loginButton">Upload a video</a>';            
                    $('#loginModal').modal('show');
                    window.setTimeout(function(){$('#loginModal').modal('hide');},700);
                    document.getElementById('main-form').innerHTML = '<h2>SIGN IN</h2><div id="login-form-container"><form id="login-form" method="post" novalidate="" action=""><input type="text" name="username" id="username" placeholder="Username" required="required" style="width:288px !important"><input type="password" name="password" id="password" placeholder="Password" required="required" style="width:288px"><div class="error" id="failure" style="display: none;"></div><a href="#" onclick="login()" class="loginButton">Sign in</a><div class="orLine">OR</div><a href="#" onclick="fblogin()" class = "fbLoginButton">Sign in with Facebook</a><a id="forgotdetails" href="#">Forgot your password?</a><div class = "signUpLink"><a href="account.php" id="forgotdetails">Sign up</a></div></form></div>';            
                  } else{
                  document.getElementById('main-form').innerHTML = "Succefully signed in";
                  document.getElementById('sign').innerHTML = '<span><a href="#" onclick="signOut()">Sign Out</a></span>';
                  document.getElementById('welcome').innerHTML = 'Hello '+response;
                  //window.setTimeout(function(){$('#loginUpload').modal('hide');},700);
                  window.setTimeout(function(){$('#loginModal').modal('hide');},700);
                  document.getElementById('main-form').innerHTML = '<h2>SIGN IN</h2><div id="login-form-container"><form id="login-form" method="post" novalidate="" action=""><input type="text" name="username" id="username" placeholder="Username" required="required" style="width:288px !important"><input type="password" name="password" id="password" placeholder="Password" required="required" style="width:288px"><div class="error" id="failure" style="display: none;"></div><a href="#" onclick="login()" class="loginButton">Sign in</a><div class="orLine">OR</div><a href="#" onclick="fblogin()" class = "fbLoginButton">Sign in with Facebook</a><a id="forgotdetails" href="#">Forgot your password?</a><div class = "signUpLink"><a href="account.php" id="forgotdetails">Sign up</a></div></form></div>';                   
                  }
                } else {
                  document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! Wrong username or password.<h1></div>";      
                jQuery('#failure').slideDown("slow"); 
                return false;
                }
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function loginvideo(){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/login.inc.php ";

      //FORM VALIDATION
      var x=document.forms["vlogin-form"]["username"].value;
      if (x==null || x=="")
      {
        document.getElementById("vfailure").innerHTML ="<div id='failureText'><h1>Oops! You haven't entered a username.<h1></div>";      
        jQuery('#vfailure').slideDown("slow");                    
        return false;
      }
      var x=document.forms["vlogin-form"]["password"].value;
      if (x==null || x=="")
      {
          document.getElementById("fvailure").innerHTML ="<div id='failureText'><h1>Oops! You haven't entered a password.<h1></div>";      
        jQuery('#vfailure').slideDown("slow");                    
        return false;
      }

      var form = document.getElementById("vlogin-form");
      var data = new FormData(form);
    
    //var form = document.getElementById("loginForm");
    //var data = new FormData(form);
    //var html = document.getElementById("source").innerHTML;
  //data = 'html='+escape(document.getElementById("source").innerHTML);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("Success");
                console.log(message);
                if (message == -1){
                  document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! Wrong username or password.<h1></div>";      
                jQuery('#vfailure').slideDown("slow");                    
                return false;
                } else {
                  document.getElementById('main-form').innerHTML = "Succefully signed in";
                  //window.setTimeout(function(){$('#loginUpload').modal('hide');},700);
                  window.setTimeout(function(){$('#myModal').modal('hide');},700);
                }
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}


function signup(first_name, last_name, email){
      
      var xhr, target, changeListener, url, data;
      url = "http://cdisports.jamescobbett.co.uk/inc/insert.php ";
      if (typeof email === 'undefined') {
        var form = document.getElementById("signForm");
        var data = new FormData(form);
      } else {
        //GOT FIRST,LAST NAMES AND EMAIL
        // Now to check email address with db, if doesn't exist pass paramaters to signup function to sign user up and add to table.
        //If email does exist, log in as that user.
        var data = new FormData();
        data.append("fname", first_name);
        data.append("lname", last_name);
        data.append("name", first_name+last_name);
        data.append("email", email);
        data.append("password", "");
      }
    //var form = document.getElementById("loginForm");
    //var data = new FormData(form);
    //var html = document.getElementById("source").innerHTML;
  //data = 'html='+escape(document.getElementById("source").innerHTML);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("Error");
                console.log(message);
                if (message == -1){
                  response = JSON.parse(this.responseText);
                  login(response['username'],response['password'], 1);
                  // document.getElementById('main-form').innerHTML = '<h2>Account created</h2><a href="http://cdisports.jamescobbett.co.uk" onclick="#" class="loginButton">Go home</a><div class="orLine">OR</div><a href="/upload.php" class="loginButton">Upload a video</a>';            
                  // $('#loginModal').modal('show');
                  // window.setTimeout(function(){$('#loginModal').modal('hide');},700);
                  // document.getElementById('main-form').innerHTML = '<h2>SIGN IN</h2><div id="login-form-container"><form id="login-form" method="post" novalidate="" action=""><input type="text" name="username" id="username" placeholder="Username" required="required" style="width:288px !important"><input type="password" name="password" id="password" placeholder="Password" required="required" style="width:288px"><div class="error" id="failure" style="display: none;"></div><a href="#" onclick="login()" class="loginButton">Sign in</a><div class="orLine">OR</div><a href="#" onclick="fblogin()" class = "fbLoginButton">Sign in with Facebook</a><a id="forgotdetails" href="#">Forgot your password?</a><div class = "signUpLink"><a href="account.php" id="forgotdetails">Sign up</a></div></form></div>';            
                } else {

                }
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function addcount(id) {
    this.removeEventListener('play', addcount, false);
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/addview.php ";
    
    var data = new FormData();
    data.append("id", id);
    
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function addrating(id) {
    this.removeEventListener('play', addcount, false);
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/addrating.php ";
    
    var data = new FormData();
    data.append("id", id);
    
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
                $('#like').html('<div id="rate-feedback"><img src="http://carbon.jamescobbett.co.uk/www/img/complete.png">Video rated</div>');
                $('#dislike').hide();
                var rating = $('#rating').data().value + 1;
                if(rating > 0){
                  $('#rating').html('<h2>+'+rating+"</h2>");
                  $('#rating').addClass("green");
                  $('#rating').removeClass("red");

                } else if(rating < 0){
                  $('#rating').html('<h2>-'+rating+"</h2>");
                  $('#rating').addClass("red");
                  $('#rating').removeClass("green");
                }
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function minusrating(id) {
    this.removeEventListener('play', addcount, false);
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/minusrating.php ";
    
    var data = new FormData();
    data.append("id", id);
    
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
                $('#like').hide();
                $('#dislike').html('<div id="rate-feedback"><img src="http://carbon.jamescobbett.co.uk/www/img/complete.png">Video rated</div>');
                var rating = $('#rating').data().value - 1;
                if(rating > 0){
                  $('#rating').html('<h2>+'+rating+"</h2>");
                  $('#rating').addClass("green");
                  $('#rating').removeClass("red");

                } else if(rating < 0){
                  $('#rating').html('<h2>-'+rating+"</h2>");
                  $('#rating').addClass("red");
                  $('#rating').removeClass("green");
                }
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function hottestvideos(days){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;
    var html = "";
    var l=0;
    url = "http://cdisports.jamescobbett.co.uk/inc/hottestvideos.php";

    var data = new FormData();
    data.append('days', days);
    data.append('limit', 12);
    
    //var form = document.getElementById("loginForm");
    //var data = new FormData(form);
    //var html = document.getElementById("source").innerHTML;
  //data = 'html='+escape(document.getElementById("source").innerHTML);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
                response = JSON.parse(response);
                html += '<div class="row row-video">';
                for(var i=0; i<response.length; i++){
                    // if(l===0){
                    //   html += '<div class="row-fluid">';
                    // }
                      html += '<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 video text-center box">';
                      html += '<a href="/video.php?id='+response[i]["id"]+'" class="video-overlay">';
                      html += '<div>';
                      html += '<h2>'+response[i]["title"]+'</h2>';
                      html += '<span>'+response[i]["category"]+'</span>';
                      html += '<br><span>'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html += '</a>';    
                      html +=  '<img src="videos/thumbnails/'+response[i]["image"]+'">';
                      html += '<div class="overlay">';
                      html += '<span class="span-title">'+response[i]["title"]+'</span>';
                      html += '<span class="span-length">'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html +=  '</div>';
                  //     if(l===2){
                  //       html += '</div>';
                  //       l=-1;
                  // } 
                  l++;
                }
                html += '</div>';
                if(days === 7){
                  document.getElementById('weeks-hottest').innerHTML = html;
                } else if (days === 28){
                  document.getElementById('months-hottest').innerHTML = html;
                }
                $( ".video-overlay" ).hover(
                    function() {
                       $('.overlay',$(this).parent('div:first')).hide();
                    }, function() {
                      $('.overlay',$(this).parent('div:first')).show();
                    }
                  );
            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function hottestvideos_videopage(days, limit){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;
    var html = "";
    var l=0;
    url = "http://cdisports.jamescobbett.co.uk/inc/hottestvideos.php";

    var data = new FormData();
    data.append('days', days);
    data.append('limit', limit);

    
    //var form = document.getElementById("loginForm");
    //var data = new FormData(form);
    //var html = document.getElementById("source").innerHTML;
  //data = 'html='+escape(document.getElementById("source").innerHTML);
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
                response = JSON.parse(response);
                for(var i=0; i<response.length; i++){
                      html += '<div class="row-fluid">';
                      html += '<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9  video text-center box">';
                      html += '<a href="/video.php?id='+response[i]["id"]+'" class="video-overlay">';
                      html += '<div>';
                      html += '<h2>'+response[i]["title"]+'</h2>';
                      html += '<span>'+response[i]["category"]+'</span>';
                      html += '<br><span>'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html += '</a>';    
                      html +=  '<img src="videos/thumbnails/'+response[i]["image"]+'">';
                      html += '<div class="overlay no-pad">';
                      html += '<span class="span-title">'+response[i]["title"]+'</span>';
                      html += '<span class="span-length">'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html +=  '</div>';
                      html += '</div>';
                  } 
                }
                  document.getElementById('weeks-hottest').innerHTML = html;
                   $( ".video-overlay" ).hover(
                    function() {
                       $('.overlay',$(this).parent('div:first')).hide();
                    }, function() {
                      $('.overlay',$(this).parent('div:first')).show();
                    }
                  );


            }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);
    return false;
}

function recentvideos(){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;
    var html = "";
    var l=0;
    url = "http://cdisports.jamescobbett.co.uk/inc/recentvideos.php";
    
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var s = "success";
                var message = response.indexOf("failed:");
                console.log(message);
                response = JSON.parse(response);
                html += '<div class="row row-video">';
                for(var i=0; i<response.length; i++){
                    // if(l===0){
                    //   html += '<div class="row-fluid">';
                    // }
                      html += '<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 video text-center box">';
                      html += '<a href="/video.php?id='+response[i]["id"]+'" class="video-overlay">';
                      html += '<div>';
                      html += '<h2>'+response[i]["title"]+'</h2>';
                      html += '<span>'+response[i]["category"]+'</span>';
                      html += '<br><span>'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html += '</a>';    
                      html += '<img src="videos/thumbnails/'+response[i]["image"]+'">';
                      html += '<div class="overlay">';
                      html += '<span class="span-title">'+response[i]["title"]+'</span>';
                      html += '<span class="span-length">'+response[i]["length"]+'</span>';
                      html += '</div>';
                      html += '</div>';
                  //     if(l===2){
                  //       html += '</div>';
                  //       l=-1;
                  // } 
                  l++;
                }
                  html += '</div>';
                  document.getElementById('recent-videos').innerHTML = html;
                    $( ".video-overlay" ).hover(
                    function() {
                       $('.overlay',$(this).parent('div:first')).hide();
                    }, function() {
                      $('.overlay',$(this).parent('div:first')).show();
                    }
                  );

            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
    return false;
}

function signOut(){
  
var xhr, target, changeListener, url, data;
    var html = "";
    var l=0;
    url = "http://cdisports.jamescobbett.co.uk/inc/logout.inc.php";
    
    console.log("Sending", data);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var message = response.indexOf("logged out");
                console.log(message);
                if(message == 0){
                  document.getElementById('sign').innerHTML = '<span><a href="#" onclick="$(\'#loginModal\').modal(\'show\')">Sign In</a></span>';
                  document.getElementById('welcome').innerHTML = '';
                  $('#logoutModal').modal('show');
                }

            }
        }
    };

    // initialise a request, specifying the HTTP method
    // to be used and the URL to be connected to.
    xhr.onreadystatechange = changeListener;
    xhr.open('POST', url, true);
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
    return false;
}