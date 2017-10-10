<?php
//echo "Current version is PHP " . phpversion();
//echo "-DBconnection status-";
error_reporting(1); //To debug for errors during connection to DB
require 'connect.php';
require 'security.php'; //this prevents XSS attacks

session_start();
if (isset($_POST['user']) && isset($_POST['passw'])) 
	{
    //$db->prepare. This avoids sql injection.
    
    $email_var = trim($_POST['user']);
    $pass_var  = trim($_POST['passw']);
	echo $email_var,$pass_var;
    $pass_var_md5 = md5($pass_var);
    
    if($login_query = $db->prepare("SELECT username,pwd FROM user WHERE username = ? AND pwd = ?")){
    
    $login_query->bind_param('ss', $email_var, $pass_var_md5);
    
    $login_query->execute();
    
    $login_query->bind_result($id,$name);
    while ($login_query->fetch()) 
	{
        foreach ($row as $key => $val) {
            $x[$key] = $val;
        }
        $results[] = $x;
        echo nl2br("\n");
		$login_verify_condition = $results[0];
		
    }
	
	if(print_r($login_verify_condition) == 1)
	{
		$_SESSION['login_user']=$email_var;
		$_SESSION['name']=$name;

		$log_success=True;
		$_SESSION['success']=$log_success;
		echo nl2br("Welcome. \n ");
		echo "A new session started for ", $_SESSION['name'];
		header("Location: /hackathon/welcome.php");
		/*
		header("location: welcome-home.php");
		$_SESSION['login_user'];
		in the welcom-home.php page, 
		
		session_start();
		if(!isset($_SESSION['login_user']))
			{
			header("Location: login.php");
			}
		and retain this user	
		*/
	}
	else
	{
		$error_login_msg="Username or Password is invalid";
		$log_success=False;
		$_SESSION['success']=$log_success;
		echo nl2br("\n ");
		echo $error_login_msg;
	}
	$login_query->close();
	
	}
	else{
			$error = $db->errno . ' ' . $db->error;
			echo $error; // 1054 Unknown column 'foo' in 'field list'
		}
	}
	

else {
    die($db->error);
    echo 'Could not fetch rows from your table- check your query again';
}



/*	

if($result = $db->query("SELECT * FROM phplogin")){
if($result->num_rows){


while($row = $result->fetch_object()){
echo 'Welcome ', $row->email,'<br>';
}

$result->free();
To print all elements in the table
$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach($rows as $row){
echo $row['email'],'<br>';
}
echo '<pre>', print_r($rows), '</pre>';


The same using while loop	
while($row = $result->fetch_assoc()){
echo 'Welcome ', $row['email'],'<br>';
}


if($update = $db->query("UPDATE phplogin SET lastname = 'velusmay' WHERE firstname =''")){
//update returns 1 when it is success
echo $update->num_rows;
echo $db->affected_rows;	
}



To delete

if($delete = $db->query("DELETE FROM phplogin WHERE firstname =''")){
//delete returns 1 when it is success
echo $delete->num_rows;
echo $db->affected_rows;	
}


To insert into a DB
if($insert = $db->query("INSERT INTO phplogin (email, password) VALUES ('','')")){
//insert returns 1 when it is success
echo $insert->num_rows;
echo $db->affected_rows;	


To insert into a DB
$email = '';
$password ='';

if($insert = $db->query("INSERT INTO phplogin ('{$email}', '{$password}') VALUES ('','')")){
//insert returns 1 when it is success
echo $insert->num_rows;
echo $db->affected_rows;	




To insert into a DB
//u can test this by passing the url index.html/?email='k@g.com'
if(isset($_GET['email']), isset($_GET['password'])){

//$db->real_escape_string() This avoids sql injection.

$email_var = $db->real_escape_string(trim($_GET['email']));
$pass_var = trim($_GET['password']);

if($insert = $db->query("INSERT INTO phplogin ('{$email}', '{$password}') VALUES ('','')")){
//insert returns 1 when it is success
echo $insert->num_rows;
echo $db->affected_rows;			
}		



I'm making the prepared statements here,

if(isset($_GET['email']), isset($_GET['password'])){

//$db->real_escape_string() This avoids sql injection.

$email_var = trim($_GET['email']);
$pass_var = trim($_GET['password']);

$users = $db->prepare("SELECT email, password FROM phplogin WHERE email = ? AND password = ?");

$users->bind_param('s', $email);
$users->bind_param('i', $password);

$users->execute();

$users->bind_result($email, $password);

while($users->fetch()){
echo $email, ' ', $password, '<br>';
}



if($insert = $db->query("INSERT INTO phplogin ('{$email}', '{$password}') VALUES ('','')")){
//insert returns 1 when it is success
echo $insert->num_rows;
echo $db->affected_rows;			
}		


*/


?>		
<a href="logout.php">Logout</a>