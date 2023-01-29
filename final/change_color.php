<?php require("functions_f.php");?>
<?php require("header.php");?>

<?php 


	$palio_email=$_SESSION["user"]->{"email"};
	$color_array=getData("SELECT color FROM `users` WHERE email='$palio_email';");
	$color=$color_array[0]["color"];
	
	
?>

<form action="receive_change_color.php" method="POST">
	<label>Select your background color:</label>
	<input type="color" id="color" name="xroma" value="<?php echo $color; ?>"><br/><br/>
	<button>Select color</button>
	
	
	
</form>
	
	
<?php require("footer.php")?>