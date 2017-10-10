<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php session_start();
	require 'php/connect.php';
	if (isset($_SESSION['name']))
	{
		$_SESSION['name']=null;
	}	
	if (isset($_SESSION['login_user']))
	{
		$_SESSION['login_user']=null;
	}	
	//global $log_success=False;

    ?>
<html>
	<head>
		<title>Course Selection</title>
		<link href="css/style.css" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="Flight Ticket Booking Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" name="keywords">
		<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>
	</head>
	<body class="body">
		<div id="overlay"></div>
		<div class="is-hidden popup" id="myPopup">
			<form action="php/login.php" method="post">
				<div>
					<img id="close" src="images/index.png" style="width:16px;float:right;">
					<h2>Login (using myUmbc account)</h2>
					<div class="clear"></div>
					<div>
						<label class="" data-icon="u" for="usrnm" style="color:#FFC107;">Email:</label>
						<input autocomplete="off" autofocus="" id="usrnm" name="user" pattern="[a-z0-9._%+-]+@umbc.edu" placeholder="Username" required="required" type="email" title="Enter as abc@umbc.edu">
					</div>
					<div class="clear"></div>
					<div>
						<label class="" for="pswd" style="color:#FFC107;">Password:</label> 
						<input autocomplete="off" id="pswd" name="passw" placeholder="Password" required="required" type="password">
					</div>
					<div class="clear"></div>
					<span class="checkbox2">
						<label class="checkbox">
							<input data-mini="true" id="log1" name="login" type="checkbox" value="1">
							<i></i>Keep me logged in
						</label>
					</span> 
					<input data-inline="true" type="submit" value="Log in">
					<div class="clear"></div>
					<div class="checkbox" style="bold;">
						
					</div>
				</div>
			</form>
		</div>
		
		<div id="tologin" style="background-color: #FFC107;height: 34px;">
			<a class="resp-tab-item" href="#" id="loginUp" style="float:right;color:white;">Login/Sign Up</a>
		</div>
		<!--<div id="tologout" style="background-color: #FFC107;height: 34px;" class="is-hidden">
			<a class="resp-tab-item" id="loggedIn" style="float:right;color:white;">
				Hi <?php echo $_SESSION['fname'];?> !
			</a>
		</div>-->
		<div class="main-agileinfo">
			<div class="sap_tabs">
			<h1 style="margin:200px;">Course Selection System</h1>
			</div>
		</div>
		<div class="footer">
			<p class="footer-new">
				&copy; 2017 Course Selection Isha Potnis, Nitika Khurana, Srishty Saha
			</p>
		</div><!--script for portfolio-->
		<script src="js/jquery.min.js"></script> 
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script> 
		<script type="text/javascript">
					   $('#pswd1, #cpswd').on('keyup', function () 
					   {
						   if ($('#pswd1').val() == $('#cpswd').val()) 
						   {
							   $('#message').html('Matching').css('color', 'white').required = true;
						   } else 
							   $('#message').html('Not Matching').css('color', 'white');
							   return false;
					   });
				   $(document).ready(function () {
					   $('#horizontalTab').easyResponsiveTabs({
						   type: 'default', //Types: default, vertical, accordion           
						   width: 'auto', //auto or any width like 600px
						   fit: true   // 100% fit in a container
					   });
					   $('#overlay').click(function(){
						   popupClose();
					   });
					   $('#loginUp').click(function(){
					   $('#myPopup').removeClass("is-hidden");
					   $('#overlay').addClass("overlay");
					   });
					   
					   $('#close').click(function(){
						   $('#myPopup').addClass("is-hidden");
						   $('#overlay').removeClass("overlay");
					   });
					   $('#close1').click(function(){
						   $('#myPopup1').addClass("is-hidden");
						   $('#overlay').removeClass("overlay");
					   });
					   
					   $('#register').click(function(){
					   $('#myPopup1').removeClass("is-hidden");
					   $('#myPopup').addClass("is-hidden");
					   $('#overlay').addClass("overlay");
					   });
					   
					   
				   }); 
				 
				   function popupClose(){
					   $('#myPopup').addClass("is-hidden");
					   $('#myPopup1').addClass("is-hidden");
					   $('#overlay').removeClass("overlay");
				   }
		</script> <!--//script for portfolio-->
										
		 <!-- Calendar -->
		<link href="css/jquery-ui.css" rel="stylesheet">
		<script src="js/jquery-ui.js"></script> 
		<script>
			 $(function() {
			   $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd',minDate: 0 });
				$('#datepicker').on('change', function() {
    $('#datepicker1').datepicker("option", "minDate", $('#datepicker').datepicker('getDate'));
});
$('#datepicker1').on('change', function() {
    $('#datepicker').datepicker("option", "maxDate", $('#datepicker1').datepicker('getDate'));
});

			 });
		</script> <!-- //Calendar -->
		 
		<script>
			$('.adult.value-plus').on('click', function(){
			  var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			  divUpd.text(newVal);
			document.getElementById('adult_count').value =  newVal;
			});			
			$('.adult.value-minus').on('click', function(){
			  var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			  if(newVal>=1) divUpd.text(newVal);
					document.getElementById('adult_count').value =  newVal;
		  });

			$('.children.value-plus').on('click', function(){
			  var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			  divUpd.text(newVal);
			document.getElementById('child_count').value =  newVal;
		  });

		  $('children.value-minus').on('click', function(){
			  var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			  if(newVal>=1) divUpd.text(newVal);
				document.getElementById('child_count').value =  newVal;
		  });
		</script> <!--//quantity-->
		 <!--load more-->
		 
		<script>
		   $(document).ready(function () {
			   size_li = $("#myList li").size();
			   x=1;
			   $('#myList li:lt('+x+')').show();
			   $('#loadMore').click(function () {
				   x= (x+1 <= size_li) ? x+1 : size_li;
				   $('#myList li:lt('+x+')').show();
			   });
			   $('#showLess').click(function () {
				   x=(x-1<0) ? 1 : x-1;
				   $('#myList li').not(':lt('+x+')').hide();
			   });
		   });
		</script> <!-- //load-more -->

	</body>
</html>