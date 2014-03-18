      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1391755347765049',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

function fblogin(){
    FB.login(function(response) {
        alert('here');
       facebookLogin();
     }, {scope: 'email'});
}

function facebookLogin(){
     FB.api('/me', {fields: 'first_name, last_name, email, id, picture'}, function(response) {
      var first_name = response['first_name'];
      var last_name = response['last_name'];
      var email = response['email'];
      var facebookid = response['id'];
      alert(first_name);
      alert(last_name);
      alert(email);
      alert(facebookid);
      console.log(first_name + " " + last_name);
      
      var xhr, target, changeListener, url, data;
      url = "http://cdisports.jamescobbett.co.uk/inc/insert.php ";

      //GOT FIRST,LAST NAMES AND EMAIL
      // Now to check email address with db, if doesn't exist pass paramaters to signup function to sign user up and add to table.
      //If email does exist, log in as that user.
      var data = new FormData();
      data.append("fname", first_name);
      data.append("lname", last_name);
      data.append("username", first_name+last_name);
      data.append("email", email);

        
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
  });
}
