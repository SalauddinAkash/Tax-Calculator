<?php
//conneting webpage to db
require_once('dbconnect.php');

//checking if input field is empty or not
if(isset($_POST['id']) && isset($_POST['l']) && isset($_POST['n']) && isset($_POST['b']) && isset($_POST['i'])
&& isset($_POST['a']) && isset($_POST['num'])){
	//query for checking if user with valid password exists
	$id = $_POST['id'];
    $l = $_POST['l'];
    $n = $_POST['n'];
    $b = $_POST['b'];
    $i = $_POST['i'];
    $a = $_POST['a'];
    $num = $_POST['num'];
    $in = $_POST['insurance'];
    $cw = $_POST['cw'];
	$sql = "INSERT INTO company VALUES('$id','$l','$n','$b','$i','$in','$cw',10,'$a','$num')";
	
	//Execute above query and return result
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)){
		header("Location: usuccess.php");
	}
	else{
		header("Location: ufailed.php");
	}
}
?>