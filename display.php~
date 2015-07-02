<?php
  
  session_start();
  
  $check=$_SESSION['username'];
  
  $username=substr($_SERVER['QUERY_STRING'],9);
  
  //echo $username;  
  
  if($username==$check){
  
   header('Location:profile.php');
  	
  }
  
  //header should be the first thing to be sent to browser  
  
  include 'header.php';

?>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style type="text/css">

#profile_image{
position: relative;
left:-10px;	
}

body{
overflow-x:hidden;
overflow-y:scroll; 
}

#btn{
width: 100px;	
}

</style>

<script>

uname=window.location.search.substring(10);

//alert(uname);

function changeText(){
	
//alert('hello');

var txt=document.getElementById("btn");

//alert(txt.textContent[0]);

if(txt.textContent[0]=="F"){
//txt.textContent="Unfollow";	
//send post request to add follower

$.post("addfollowers.php",{username:uname,flag:1},function(data){
	txt.textContent="Unfollow "+data;
});

}

else if(txt.textContent[0]=="U"){
//txt.textContent="Follow";
//send post request to remove follower
$.post("addfollowers.php",{username:uname,flag:0},function(data){
	txt.textContent="Follow "+data;
});

}	
	
}



</script>

</head>

<body>

<div class="row">


<div class="col-md-2 col-md-offset-1" id="test">

<div id="profile_image">
<?php
session_start();

include 'dbconnection.php';

$username=$_GET['username'];

$query="select * from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_row($result);

$src="pimage/".$row[0]."/".$row[6];

//echo $src;

echo '<img src="'.$src.'"width="200px">';

//<img src="images/default_profile.jpg" width="130px" height="130px" id="disp_p_image">//

?>

</div>

</div>


<div class="col-md-5">
<h3><?php session_start(); echo ucwords($_GET['username']); ?></h3>
<button class="btn btn-info btn-md" id="btn" onclick="changeText()"><?php 
session_start(); 
include 'dbconnection.php';
$username=$_GET['username'];
$username2=$_SESSION['username'];
$query="select nfollowers from user where username='$username'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);

//$row[0] are the number of followers

$query1="select * from followers where uname1='$username2' and uname2='$username'";

$result1=mysqli_query($conn,$query1);

$row1=mysqli_num_rows($result1);

if($row[0]==0){
  echo 'Follow '.$row[0];	
}

else{

if($row1==1)
  echo 'Unfollow '.$row[0];

else if($row1==0)
   echo 'Follow '.$row[0];
}
?>

</button>

<hr>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
</div>


<div class="col-md-3">
<h3>This will display your interests</h3>
<br>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
</div>



</div>

</body>



</html>

