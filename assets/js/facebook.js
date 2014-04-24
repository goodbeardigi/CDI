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
        //alert('here');
       facebookLogin();
     }, {scope: 'email'});
}

function facebookLogin(){
    //alert('here 2');
     FB.api('/me', {fields: 'first_name, last_name, email, id, picture'}, function(response) {
      var first_name = response['first_name'];
      var last_name = response['last_name'];
      var username = response['first_name'];
      var email = response['email'];
      //var facebookid = response['id'];
      //var fbactions = 1;
      // alert(first_name);
      // alert(last_name);
      // alert(email);
      // alert(facebookid);
      console.log(first_name + " " + last_name);
      
    var xhr, target, changeListener, url, data;
    //setting url to the php code to add comments to the db
    url = "http://cdisports.jamescobbett.co.uk/inc/checkUsers.php";
    var data = new FormData();

    data.append("email", email);

    console.log("Sending", data);
    console.log(this.test);
    // create a request object
    xhr = new XMLHttpRequest();

    changeListener = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("Response", this.responseText);
                var response = this.responseText;
                var message = response.indexOf("New");
                console.log(message);
                if (message == -1){
                    //alert('log in');
                    login(username);
                }
                else {
                    //alert('sign up');
                    // User is new so register them
                    signup(first_name,last_name,email,username);
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