// SMOOTH SECTIONS SCROLL + PARALLAX PLUGIN
//http://www.ianlunn.co.uk/plugins/jquery-parallax/
jQuery(document).ready(function(){
  jQuery('#topnav').localScroll(3000);
  jQuery('.gobtnwrapper').localScroll(3000);
  
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


//Intercept Upload form
function processUploadForm(e) {
    if (e.preventDefault) e.preventDefault();
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
                var message = response.indexOf("failed:");
                console.log(message);
                if (response != ''){              
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

function login(username){
    // declaring variables to be used
    var xhr, target, changeListener, url, data;

    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/login.inc.php ";
    if (typeof username != 'undefined') {
          var data = new FormData();
          data.append("name", username);
          data.append("password", '');

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
                var message = response.indexOf("Success");
                console.log(message);
                if (message == -1){
                 document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! Wrong username or password.<h1></div>";      
                jQuery('#failure').slideDown("slow");                    
                return false;
                } else {
                  document.getElementById('main-form').innerHTML = "Succefully signed in";
                  //window.setTimeout(function(){$('#loginUpload').modal('hide');},700);
                  window.setTimeout(function(){$('#loginModal').modal('hide');},700);
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
                var message = response.indexOf("Success");
                console.log(message);
                if (message == -1){
                // document.getElementById("failure").innerHTML ="<div id='failureText'><h1>Oops! Wrong username or password.<h1></div>";      
                //jQuery('#failure').slideDown("slow");                    
                return false;
                } else {
                  document.getElementById('main-form').innerHTML = "Succefully signed in";
                  window.setTimeout(function(){$('#loginUpload').modal('hide');},700);
                  window.setTimeout(function(){$('#myModal').modal('hide');},700);
                //  document.getElementById('main-form').innerHTML = "Succefully signed in";
                  //window.setTimeout(function(){$('#loginUpload').modal('hide');},700);
                //  window.setTimeout(function(){$('#loginModal').modal('hide');},700);
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

function hottestvideos(days){
    // declaring variables to be used
    var xhr, target, changeListener, url, data, html;
    var l=0;
    url = "http://cdisports.jamescobbett.co.uk/inc/hottestvideos.php";

    var data = new FormData();
    data.append('days', days);
    
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
                    if(l===0){
                      html += '<div class="row-fluid">';
                    }
                      html += '<div class="span4 video text-center box">';
                      html += '<a href="/video.php?id='+response[i]["id"]+'" class="video-overlay">';
                      html += '<div>';
                      html += '<h2>'+response[i]["title"]+'</h2>';
                      html += '<span>'+response[i]["category"]+'</span>';
                      html += '</div>';
                      html += '</a>';    
                      html +=  '<img src="images/video-temp.jpg">';
                      html +=  '</div>';
                      if(l===2){
                        html += '</div>';
                        l=-1;
                  } 
                  l++;
                }
                if(days === 7){
                  document.getElementById('weeks-hottest').innerHTML = html;
                } else if (days === 28){
                  document.getElementById('months-hottest').innerHTML = html;
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

function recentvideos(){
    // declaring variables to be used
    var xhr, target, changeListener, url, data, html;
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
                for(var i=0; i<response.length; i++){
                    if(l===0){
                      html += '<div class="row-fluid">';
                    }
                      html += '<div class="span4 video text-center box">';
                      html += '<a href="/video.php?id='+response[i]["id"]+'" class="video-overlay">';
                      html += '<div>';
                      html += '<h2>'+response[i]["title"]+'</h2>';
                      html += '<span>'+response[i]["category"]+'</span>';
                      html += '</div>';
                      html += '</a>';    
                      html +=  '<img src="images/video-temp.jpg">';
                      html +=  '</div>';
                      if(l===2){
                        html += '</div>';
                        l=-1;
                  } 
                  l++;
                }
                  document.getElementById('recent-videos').innerHTML = html;

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