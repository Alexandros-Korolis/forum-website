<?php require("functions_f.php");?>

<?php 
	
	$post_idByGet = $_GET["post_id"];
	$new_text = $_GET["update_post"];
	
	$sql ="UPDATE `posts` SET `description`='$new_text' WHERE `id`='$post_idByGet'";
	updateToDb($sql);
	
	
	
	header("Location:"."view_post.php?id=$post_idByGet");


?>