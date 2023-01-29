

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Forum</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			  <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
			  <?php if(!isset($_SESSION["loggedIn"])){?>
				<a class="nav-item nav-link" href="sign_up.php">Sign Up</a>
			  <?php }?>
			  <?php if(!isset($_SESSION["loggedIn"])){?>
				<a class="nav-item nav-link" href="login.php">Log In</a>
			  <?php }?>
			  <?php if(isset($_SESSION["loggedIn"])){?>
				<a class="nav-item nav-link" href="logout.php">Log out</a>
				<a class="nav-item nav-link" href="update_user.php">Update User</a>
				<a class="nav-item nav-link" href="change_color.php">Change Color</a>
				<a class="nav-item nav-link" href="create_post.php">Create Post</a>
			  <?php }?>
		</div>
    </div>
	</nav>
