<?php require("functions_f.php");?>
<?php require("header.php");?>

<?php
	$post_id = $_GET["post_id"];
?>

<form action="receive_update_post.php" method="GET">
	<input type=hidden name="post_id" value="<?php echo $post_id ?>">
	<textarea name="update_post" rows="4" cols="50" ></textarea></br></br>
	<button>Submit</button>
</form>
<?php require("footer.php");?>