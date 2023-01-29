<?php require("header.php");?>
<?php require("functions_f.php");?>

<?php
$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$address=$_POST["address"];


if($name==Null){
	die( "Enter name" );
}

if($password==Null){
	die("<br/>"."Enter password"."<br/>") ;
}

if($email==Null){
	die( "<br/>"."Enter email"."<br/>") ;
}

if($address==Null){
	die( "<br/>"."Enter address"."<br/>") ;
}

//elegxo an to email sto sign up uparxei idi

$receive_email=getData("SELECT name,password,email,address FROM `users` WHERE email='$email';");
if(sizeof($receive_email)>0){
	die("This email already exists !!");
}

//eisagogi stin vasi 
$receive_sign=getData("SELECT name,password,email,address,color FROM `users` 
	WHERE name='$name' AND password='$password' AND email='$email' AND address='$address';");

if(sizeof($receive_sign)===0){
	
	
	
	insertToDB("INSERT INTO `users`(`name`, `password`, `email`, `address`,`color`) VALUES ('$name','$password','$email','$address','$color');");
	
	
	$receive_log=getData("SELECT name,password,email,address FROM `users` 
	WHERE name='$name' AND password='$password' AND email='$email' AND address='$address';");
	
	$user=new stdclass();	
	$user->name=$receive_log[0]["name"];
	$user->password=$receive_log[0]["password"];
	$user->email=$receive_log[0]["email"];
	$user->address=$receive_log[0]["address"];	
	$_SESSION["user"]=$user;	
	$_SESSION["loggedIn"]=true;
	 header("Location:"."index.php");

}else{
	header("Location:"."login.php");
}



?>
<?php require("footer.php");?>