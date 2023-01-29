

<?php require("header.php");?>

	<form action="receive_sign_up.php" method="POST">
		<label>Name</label><br/>
		<input type="text" id="name" name="name"><br/><br/>
		
		<label>Email</label><br/>
		<input type="email" id="email" name="email"><br/><br/>
		
		<label>Password</label><br/>
		<input type="password" id="password" name="password"><br/><br/>
		
		<label>Address</label><br/>
		<input type="address" id="address" name="address"><br/><br/>
		
		<button>Sign Up</button>
		
	</form>
	
<?php require("footer.php");?>

