<?php require("header.php");?>

	<form action="receive_update_user.php" method="POST">
		<label>Name</label><br/>
		<input type="text" value="<?php echo $_SESSION["user"]->{"name"}; ?>" name="up_name"><br/><br/>
		
		<label>Email</label><br/>
		<input type="email" value="<?php echo $_SESSION["user"]->{"email"}; ?>" name="up_email"><br/><br/>
		
		<label>Password</label><br/>
		<input type="password" value="<?php echo $_SESSION["user"]->{"password"}; ?>" name="up_password"><br/><br/>
		
		<label>Address</label><br/>
		<input type="address" value="<?php echo $_SESSION["user"]->{"address"}; ?>" name="up_address"><br/><br/>
		
		<button>Save Changes</button>
		
		
		
		
<?php require("footer.php");?>