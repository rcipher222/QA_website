<?php

//this file is for the time being till search is not working//

//////////// adding follow feature //////////

session_start();

include 'header.php';

include 'dbconnection.php';

$username=$_SESSION['username'];

//echo $username;

$query="select * from user";

$result=mysqli_query($conn,$query);


$display_html='

<!DOCTYPE html>
<html lang="en">


<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<style>
body{overflow:hidden}
</style>

<script src="script/take_to_user_page.js">

</script>

</head>

<body>
<div class="row" id="x">
<div class="col-md-4 col-md-offset-1">
<h3> List of Registered Users</h3><br>

';


while($rows=mysqli_fetch_array($result)){
	
	$str=$rows['username'];
	
	if($str==$_SESSION['username']) continue;
	
	
	$display_html=$display_html.'<h4><a href="#" onclick="window.location=\'display.php?username='.$str.'\'">'.$str.'</h4></a><hr>';
	
}

$display_html_end='</div></div></body></html>';

$display_html=$display_html.$display_html_end;



echo $display_html;

?>