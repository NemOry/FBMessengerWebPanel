<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://www.blacktie.co/demo/small/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.blacktie.co/demo/small/assets/css/main.css" rel="stylesheet">
    
  </head>

  <body style="background:white;">
  	<div id="fb-root"></div>
	<script>

		window.fbAsyncInit = function() {
			FB.init({
			appId      : '508427445917366',
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true  // parse XFBML
		});


		FB.Event.subscribe('auth.authResponseChange', function(response) 
		{
			if (response.status === 'connected') 
			{
				navigator.cascades.postMessage(response.authResponse.accessToken);
			} 
			else if (response.status === 'not_authorized') 
			{
				FB.login();
			} 
			else 
			{
				FB.login();
			}
		});};

	  (function(d){
	   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement('script'); js.id = id; js.async = true;
	   js.src = "//connect.facebook.net/en_US/all.js";
	   ref.parentNode.insertBefore(js, ref);
	  }(document));

	  function testAPI() 
	  {
	    FB.api('/me', function(response) 
	    {
	      console.log(response);
	    });

	    FB.api('/me/conversations', function(response) 
	    {
	      console.log(response);
	    });
	  }

	  function logout()
	  {
	    FB.logout(function(response) 
	    {
	      console.log(response);
	    });
	  }

	</script>
	<br/>
<img class="img-circle" src="http://i.imgur.com/895jlcI.png" width="150" height="150" class="mb-7 hero-image">
				<h2 style="color:gray">Messenger for BlackBerry 10<h2>
				<a href="expired.php" hidden style="color:blue; text-decoration:underline; font-size: 14px;">Did the app said expired? Please click here.</a>
				<h5 style="color:gray">Please click the button below<h5>

				<div class="fb-login-button" data-scope="read_mailbox, friends_online_presence, user_about_me, basic_info, xmpp_login" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div>
			<br/><br/><br/>
    
</body>
</html>


