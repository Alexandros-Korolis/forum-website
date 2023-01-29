<?php require("header.php");?>
<?php require("functions_f.php");?>


<?php

$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$address=$_POST["address"];


//edo thelo elegxo gia kena stoixeia



if($password==Null){
	echo "<br/>"."Enter password"."<br/>" ;
}

if($email==Null){
	echo "<br/>"."Enter email"."<br/>" ;
}



$receive_log=getData("SELECT name,password,email,address FROM `users` 
	WHERE password='$password' AND email='$email';");
	



if(sizeof($receive_log)>0){
	
	$user=new stdclass();	
	$user->name=$receive_log[0]["name"];
	$user->password=$receive_log[0]["password"];
	$user->email=$receive_log[0]["email"];	
	$user->address=$receive_log[0]["address"];
	$_SESSION["user"]=$user;
	$_SESSION["loggedIn"]=true;
	
	
	
	header("Location:"."index.php");
}else{
	header("Location:"."index.php");
}





?>

<?php require("footer.php");?>