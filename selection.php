
<!DOCTYPE html>
<?php 		session_start();
            require "php/connect.php";  
	if (!isset($_SESSION['name'])){
		$_SESSION['name']=null;
		$year = trim($_POST['year']);
			$_SESSION['year']=$year;
			$semester = trim($_POST['semester']);
			$_SESSION['semester']=$semester;
			$major = trim($_POST['major']);
			$_SESSION['major']=$major;
			$school = trim($_POST['school']);
			$_SESSION['school']=$school;
	}
    ?>
<html>
<!--nitika-->

    <head>
		<title>Course selection</title>
		<link rel="stylesheet" href="css/style.css">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
				<link href="css/jquery-ui.css" rel="stylesheet">
		<!--script for portfolio-->

		<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
		</script>
		<script language="JavaScript" type="text/javascript"  src="js/easyResponsiveTabs.js"></script>
		<script language="JavaScript" type="text/javascript"  src="js/jquery-ui.js">
		</script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

				
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
   <style>
#div1,#div3,#div2 {
  width: 250px;
    height: 84px;
    padding: 10px;
	float: left;
    border: 1px solid #aaaaaa;
    margin-left: 20px;
}
.sym{   
   float: left;
    padding: 30px;
    font-size: 30px;
}
</style>
<script>
var a,b,c;
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text/plain", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
	if(ev.target.getAttribute('data-getappended') == 
   document.getElementById(data).getAttribute('data-appendto'))
    if(ev.target.getAttribute('data-getappended') == 'div1'){
		a = data;
	}
	if(ev.target.getAttribute('data-getappended') == 'div2'){
		b = data;
	}
	ev.target.appendChild(document.getElementById(data));
	document.getElementsByName('cou').value=b;
	document.getElementById('jboss').submit();
}
</script>
	</head> 
 
	
	<body id="body" class="body" >
	<div style="background-color: #FFC107;height: 34px;">
			<a href="php/logout.php" class="resp-tab-item" style="float:right;color:white;" id="loginUp">
			Hi <?php echo $_SESSION['name'];?>!
			</a>
			
	</div>
	<div class="row col-sm-12">
	<div id="courses" class="col-sm-6">
	<h2>Courses</h2>
	<span class="">
							<div class="">
							<ul>
	<?php 
							$view_query="SELECT c_name FROM courses";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
						<li id="<?php echo $dur;?>" draggable="true" ondragstart="drag(event)" width="336" height="69" data-appendto="div1">
        <h2><?php echo $dur;?></h2>
    </li>
								
							
						<?php 
							}
						?>
						</ul>
						</div>
						</span>
						</div>
						<input type="hidden" name="cou"/>
						<div id="instr" class="col-sm-6">
	<h2>Instructors</h2>
	<span class="">
							<div class="">
							<ul>
	<?php 
							$view_query="SELECT ins_name FROM instructor";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.  
							while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
							{  
								$dur=$row[0];  
						?>
						<li id="<?php echo $dur;?>" draggable="true" ondragstart="drag(event)" width="336" height="69" data-appendto="div2">
        <h2><?php echo $dur;?></h2>
    </li>
								
							
						<?php 
							}
						?>
						</ul>
						</div>
						</span>
						</div>
<!--Isha Code-->
						<form action="" method="post" id="jboss">

<input type="hidden" name="cous"/>
</form>
<script>
var _counter = 0;
function Add() {
    if(_counter < 3){
		_counter++;
		var oClone = document.getElementById("template").cloneNode(true);
		oClone.id += (_counter + "");
		document.getElementById("placeholder").appendChild(oClone);
	}
}
</script>
<!--Isha Code Ends-->				
	
	
	
	<div id="evaluate">
	<h2>Evaluate</h2>
	<div id='placeholder'>
	<div id = 'template' style="float:left;">
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ondragstart="drag(event)" draggable="true" data-getappended="div1"></div>
	<div class="sym">+</div>
	<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" ondragstart="drag(event)" draggable="true" data-getappended="div2"></div>
	<div class="sym">=</div>
	<?php
	$view_query="SELECT ins_name FROM instructor where ";//select query for viewing users.  
							$run=mysqli_query($db,$view_query);//here run the sql query.

?>
<?php
								$view_users_query="select distinct v.vendorName from flightvendor v, flight_info f where v.vendorID=f.f_vendorID and f.c_sourceID='$sid' and f.c_destID='$did'";//select query for viewing users.  
								$run=mysqli_query($db,$view_users_query);//here run the sql query.  
								while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
								{  
									$name=$row[0];
									
							?>
	<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)" ondragstart="drag(event)" draggable="true" data-getappended="div1" value="<?php echo $name;?>">
	<?php 
								//}
							}
						?></div>
	</div>
	<p><button type="button" name="Submit" id="add_me" onclick="Add();" class="btn" style="margin-left: 30px;">Add course</button></p>
	<p><h4 class="float:right;">Message</h4></p>
	</div>
	</div>
			<div class="row col-sm-12"><hr><h2 class="col-sm-4">Total</h2><h3 class="col-sm-4"></h3></div>

<script language="JavaScript" type="text/javascript" src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

		<!-- //Calendar -->
		<!--quantity-->

		<!--//quantity-->
		<!--load more-->
		</div>
	</body>  
      
</html>  