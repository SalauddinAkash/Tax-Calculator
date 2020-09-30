<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['tl']) && isset($_POST['pass'])){
	//query for checking if user with valid password exists
	$tl = $_POST['tl'];
    $p = $_POST['pass'];
	$sql = "INSERT INTO users VALUES('$tl','$p')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: success.php");
	}
	else{
		header("Location: failed.php");
	}
}
?>