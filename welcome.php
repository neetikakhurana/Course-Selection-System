<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php 
session_start();
require 'php/connect.php';
        if($_SESSION['success'] == 0){
        }
		else{

		}
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
		<div style="background-color: #FFC107;height: 34px;">
			<a href="php/logout.php" class="resp-tab-item" style="float:right;color:white;" id="loginUp">
			Hi <?php echo $_SESSION['name'];?>!
			</a>
			
	</div>
	<div class="main-agileinfo">
		<div class="sap_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class=""></li>
				</ul>
				<div class="clearfix"></div>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="selection.php" method="post">
							<div class="">
								<h3 style="float:left;">School</h3>
								
								<?php 
							$view_query="SELECT type FROM school";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							echo '<input list="w3_country1" class="frm-field required" name="school" placeholder="" required="" type="text" autocomplete = "on">
										<datalist id="w3_country1">';
							//echo '<select class="" id="w3_country1" onchange="change_country(this.value)" name="fclass" width="100%">';
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
									<option value="<?php echo $dur;?>" name="<?php echo $dur;?>">
										<?php 
							}
						?>
										
									</option>
									
								</datalist>
							</div>
							<div class="clear"></div>
														<div class="clear"></div>
<br/>
							<div class="">
								<h3 style="float:left;">Major</h3>
								<?php 
							$view_query="SELECT dept_name FROM department";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							echo '<input list="dept" class="frm-field required" name="major" placeholder="" required="" type="text" autocomplete = "on">
										<datalist id="dept">';
							//echo '<select class="" id="w3_country1" onchange="change_country(this.value)" name="fclass" width="100%">';
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
									<option value="<?php echo $dur;?>" name="<?php echo $dur;?>">
										<?php 
							}
						?>
										
									</option>
									
								</datalist>
							</div>
							<br/>
							<br/>
							<div class="numofppl">
							<br/>
								<div class="adults">
									<h3>Semester</h3>
									
									<div class="quantity">
									<?php 
							$view_query="SELECT sem_type FROM semester";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							echo '<input list="sem" class="frm-field required" name="semester" placeholder="" required="" type="text" autocomplete = "on">
										<datalist id="sem">';
							//echo '<select class="" id="w3_country1" onchange="change_country(this.value)" name="fclass" width="100%">';
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
										<option value="<?php echo $dur;?>" name="<?php echo $dur;?>">
										<?php 
							}
						?>
										</option>
										
									</datalist>
									</div>
								</div>
								<div class="child" style="margin-left:20px;">
									<h3>Year</h3>
									<div class="quantity">
										<?php 
							$view_query="SELECT year_name FROM year";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							echo '<input list="yr" class="frm-field required" name="year" placeholder="" required="" type="text" autocomplete = "on">
										<datalist id="yr">';
							//echo '<select class="" id="w3_country1" onchange="change_country(this.value)" name="fclass" width="100%">';
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
										<option value="<?php echo $dur;?>" name="<?php echo $dur;?>">
										<?php 
							}
						?>
										</option>
										
									</datalist>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							
							<div class="clear"></div>
							<input type="submit" value="Next">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="footer-new">&copy; 2017 Course Selector . Isha Potnis, Srishty Saha, Nitika Khurana</p>
	</div><!--script for portfolio-->
	<script src="js/jquery.min.js">
	</script> 
	<script src="js/easyResponsiveTabs.js" type="text/javascript">
	</script> 
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
	                 
	               
	           }); 
			  
				
	</script> 
	<link href="css/jquery-ui.css" rel="stylesheet">
	<script src="js/jquery-ui.js">
	</script> 
	
</body>
</html>