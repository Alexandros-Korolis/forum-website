<?php require("functions_f.php");?>
<?php require("header.php");?>

<?php 

$sql="SELECT cat_title FROM `categories`";
$katigories=getData($sql);


?>

	<form action="receive_create_post.php" method="POST">
		<label>Title</label><br/><br/>
		<input type="text" name="title"><br/><br/>
		
		<label>Description</label><br/><br/>
		<textarea name="description" rows="14" cols="50">
		</textarea><br/><br/>
		<label>Category</label><br/><br/>
		<select name="category" >
		
		<!--Vazo san option categories` apo tin vasi -->
		
		<?php 
		$i=0;
		while($i<sizeof($katigories)){
			echo "<option value=".$katigories[$i]{"cat_title"}.">".$katigories[$i]{"cat_title"}."</option>";
			$i++;
		}
		?>
		</select><br/><br/>
		
		<button>Create Post</button>
	
	</form>
<?php require("footer.php");?>