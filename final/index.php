<?php require("functions_f.php");?>
<?php require("header.php");?>




	<!-- Allagi background color apo sundedemeno xristi-->
	
 <table  width=70%
<?php
		if(isset($_SESSION["loggedIn"])){
		$palio_email=$_SESSION["user"]->{"email"};
		$xroma_array=getData("SELECT `color` FROM `users` WHERE email='$palio_email'");
		$xroma_style=$xroma_array[0]{"color"};
		
		?> style="background-color:<?php echo $xroma_style ; }?>;"  >

	<!--Emfanisi posts ana katigoria-->
	<?php
	$categoriesArray = getData("select * from categories");

	for($i = 0; $i< sizeof($categoriesArray); $i++) {
			$catId = $categoriesArray[$i]["id"];
			$catName = $categoriesArray[$i]["cat_title"];?>
			<tr>
				<th colspan="3"><?php echo $catName;?></th>
			</tr>
	
	<?php

			$postsInCategory=getData("SELECT id,title,post_created, user_id FROM posts
									WHERE category_id=$catId");

			foreach($postsInCategory as $indexElement) {
					$postId = $indexElement["id"];
					$postTitle = $indexElement["title"];
					$postCreated = $indexElement["post_created"];
					$user_id = $indexElement["user_id"];
					$authorArray = getData("select * from users where id=$user_id");
					$author = $authorArray[0]["name"];
	?>

				<tr>
							<td width=50%>
								<a href="view_post.php?id=<?php echo $postId;?>">
									<?php echo $postTitle;?></a></td>
									<td><?php echo $author;?></td>
									<td><?php echo $postCreated;?></td>
							</tr>

			<?php
			}
	} ?>
</table>

 </table>



<?php require("footer.php");?>