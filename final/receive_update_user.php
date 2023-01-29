<?php require("functions_f.php");?>

<?php require("header.php");?>
<?php

$up_name=$_POST["up_name"];
$up_password=$_POST["up_password"];
$up_email=$_POST["up_email"];
$up_address=$_POST["up_address"];


//edo thelo elegxo gia kena stoixeia

if($up_name==Null){
	echo "Enter name" ;
}else if($up_password==Null){
	echo "<br/>"."Enter password"."<br/>" ;
}else if($up_email==Null){
	echo "<br/>"."Enter email"."<br/>" ;
}else if($up_address==Null){
	echo "<br/>"."Enter address"."<br/>" ;
}else {
	
//kano update ton xristi ,me vasi to email pou ekane log in 
	$palio_email=$_SESSION["user"]->{"email"};
	
	updateToDb("UPDATE `users` SET `name`='$up_name',`email`='$up_email',`password`='$up_password',`address`='$up_address' WHERE `email` ='$palio_email';");


	
	$user=new stdclass();
	
	
	$user->name=$up_name;
	$user->password=$up_password;
	$user->email=$up_email;
	$user->address=$up_address;
	
	
	$_SESSION["user"]=$user;
	$_SESSION["loggedIn"]=true;
		

	echo "Your profil has been updated !!";
}





?>
<?php require("footer.php");?>