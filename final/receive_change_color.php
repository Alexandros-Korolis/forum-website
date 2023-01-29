<?php require("functions_f.php");?>

<?php require("header.php");?>

<?php

	$palio_email=$_SESSION["user"]->{"email"};
	$xroma_post=$_POST["xroma"];
	
	
	updateToDb("UPDATE `users` SET color='$xroma_post' WHERE `email` ='$palio_email';");
	
	header("Location:"."index.php");

?>

<?php require("footer.php");?>