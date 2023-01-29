<?php require("functions_f.php");?>
<?php require("session.php");?>

<?php
	$title=$_POST["title"];
	$description=$_POST["description"];
	$category=$_POST["category"];
	$loggedin_email=$_SESSION["user"]->{"email"};
	
	// perno id logged in user
	$id_array=getData("SELECT id FROM `users` WHERE email='$loggedin_email'");
	$id_loggedin=$id_array[0]{"id"};
	
	// perno to category_id
	$category_array=getData("SELECT id FROM `categories` WHERE cat_title='$category'");
	$category_id=$category_array[0]{"id"};
	
	//eisago to post stin vasi
	$sql="INSERT INTO `posts`(`title`, `description`,`user_id`, `category_id`) VALUES ('$title','$description','$id_loggedin','$category_id')";
	insertToDB($sql);
	
	header("Location:"."index.php");
?>