<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['l']) && isset($_POST['la']) && isset($_POST['id'])  && isset($_POST['date'])){
	//query for checking if user with valid password exists
	$tl = $_POST['l'];
    $la = $_POST['la'];
    $id = $_POST['id'];
    $date = $_POST['date'];
	$sql = "INSERT INTO loan VALUES('$tl','$la','$date','$id')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: lsuccess.php");
	}
	else{
		header("Location: lfailed.php");
	}
}
?>