<?php
$db = new mysqli('localhost', 'root', '', 'Hackathon');
if ($db->connect_errno) {
	echo $db->connect_errno;
	die('Sorry Dude, You have a trouble connecting to your DB. Check for typo errors may be.');
	exit();
	echo nl2br("\n");
}
else{
	//echo "DB connection successful. Yay!\n";
	//echo nl2br("\n");
}

?>
