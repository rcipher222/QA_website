<?php
    
//remaining create directory when a new user registers//

if(!isset($_POST['uname'])){
	
	header('Location:index.php');
	
}    
    
$conn=mysqli_connect("localhost","root","");


if(!$conn){
 echo "could not connect to database";	
}

$select=mysqli_select_db($conn,"qa");

if(!$select){
 echo "could not select the database";	
}




$username=$_POST['uname'];
$fullname=$_POST['fname'];
$password=$_POST['pwd'];
$email=$_POST['email'];

$query1="select * from user where username='$username'";

$result=mysqli_query($conn,$query1);
$rows=mysqli_num_rows($result);

if($rows>0){

//username already exists

//echo $rows;

echo '<!DOCTYPE html>
<html lang="en">

<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container well">
<h3>Username already exists. You may want to change it. You will be redirected to signup page in 10 seconds</h1>
<center><a href="index.php" class="btn btn-danger" role="button">Go Back to Signup Page</a></center>
</div>
</body>

</html>
';

header( "refresh:10;url=index.php" );
	
}

else{
session_start();

$_SESSION['username']=$username;
$_SESSION['fullname']=$fullname;
$_SESSION['email']=$email;
//////not sure whether password required or not as a session variable//////////




//give 500 credits to new user
$credits=500;

//echo $username;
//echo $fullname;

$query="INSERT INTO user (fname,password,email,username,credits) VALUES ('$fullname','$password','$email','$username','$credits');";

mysqli_query($conn,$query) ;//or die(mysqli_error($conn));

mysqli_close();

header('Location:home.php');
exit();
}
?>
