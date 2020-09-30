<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['l']) && isset($_POST['att']) && isset($_POST['nv'])){
	
    $att = $_POST['att'];
	$l = $_POST['l'];
	$nv = $_POST['nv'];

	$sql = "UPDATE company SET $att = '$nv' WHERE trade='$l'";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: edit_suc.php");
	}
	else{
		header("Location: editf.php");
	}
}
?>