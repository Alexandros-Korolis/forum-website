<?php require("functions_f.php");?>
<?php require("header.php");?>

<?php
	$post_id=$_GET["id"];
	$post_description=getData("SELECT description FROM `posts` WHERE `id`=$post_id");
?>

<div class="container margin-top">
<?php echo $post_description[0]{"description"}."</br>"."</br>";?>
</div>

<?php
	if(isset($_SESSION["loggedIn"])){
?>
	<form action="update_post.php" method="GET">
		<input type=hidden name="post_id" value="<?php echo $post_id ?>">
		<button>Update Post</button>
	</form>
<?php 
	
	}
?>
<?php require("footer.php");?>