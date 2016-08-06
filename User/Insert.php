<?php
$con = mysqli_connect('localhost', 'root','');
if (!$con)
{
	echo 'Not Connected';
}
if (!mysqli_select_db($con, 'user') )
{
	echo 'DB Not selected';
}
$Name = $_POST['username'];
$Password = $_POST['password'];
$Telephone = $_POST['telephone'];
	$sql = "INSERT INTO `user_1`(`Username`, `Password`, `Telephone`) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[telephone]')";
	if (!mysqli_query($con, $sql))	
	{
		echo 'Not Inserted';
	}
	else 
	{
		echo 'Inserted';
	}
		header ("url = Index1.php");

?>