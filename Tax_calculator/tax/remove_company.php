<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['tl'])){
    $info = $_POST['tl'];
	$sql = "DELETE from company WHERE trade='$info'";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: r_succ.php");
	}
	else{
		header("Location: removecf.php");
	}
}
?>