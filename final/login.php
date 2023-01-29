<?php require("header.php");?>

	<form class="receive_login.php" action="receive_login.php" method="POST">
		
		<input type = "hidden" name="name">
		<input type = "hidden" name="address">
		
		<label>Email</label><br/>
		<input type="email" id="email" name="email"><br/><br/>
		
		<label>Password</label><br/>
		<input type="password" id="password" name="password"><br/><br/>
		
		
		<input type="hidden" name="color">
		
		<button>Log In</button>
		
	</form>
	
<?php require("footer.php");?>