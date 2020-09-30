<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['l']) && isset($_POST['t']) && isset($_POST['tid']) && isset($_POST['date'])){
	//query for checking if user with valid password exists
	$l = $_POST['l'];
    $p = $_POST['t'];
    $tid = $_POST['tid'];
    $date = $_POST['date'];

	$sql = "INSERT INTO taxes VALUES('$l','$tid','$date','$p')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: adminPage.php");
	}
	else{
		header("Location: add_tax.php");
	}
}
?>