<?php

session_start();

include 'dbconnection.php';

$username=$_POST['username'];
$username2=$_SESSION['username'];

$query="select nfollowers from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_row($result);

$nfollowers=$row[0];

if($_POST['flag']==1){
	
//increment follower of the user

echo $nfollowers;

$nfollowers=$nfollowers+1;

//$_SESSION[user] started following $_GET[user]

$que="insert into followers values ('$username2','$username');";
mysqli_query($conn,$que);
}

else if($_POST['flag']==0){

$nfollowers=$nfollowers-1;
 
$que="delete from followers where uname1='$username2' and uname2='$username';";
mysqli_query($conn,$que);
	
}

$query1="update user set nfollowers='$nfollowers' where username='$username';";

echo $nfollowers;
mysqli_query($conn,$query1);


?>