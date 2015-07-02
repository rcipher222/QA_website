
<?php
////this file will validate username and password for returning users////

////basic login ready but very weak needs to be updated////


///code remaining to check empty strings///

$conn=mysqli_connect("localhost","root","");

if(!$conn){

echo "could not establish connection to database";
	
}

$select=mysqli_select_db($conn,"qa");

if(!$select){
echo "could not connect to database";	
}


$username=$_POST['username'];
$password=$_POST['password'];


$query="select * from user where username='$username' and password='$password';";

$result=mysqli_query($conn,$query);

$rows=mysqli_num_rows($result);



echo $rows;

if(!$result || $rows<=0){
	echo "error logging in";
	header('Location:index.php');
}

else{
session_start();

$_SESSION['username']=$username; //username as well as id unique for very user

$ans=mysqli_fetch_array($result);

$_SESSION['uid']=$ans['id'];

//echo 'hello'.$_SESSION['uid1'];

header('Location:home.php');

}

mysqli_close();

?>