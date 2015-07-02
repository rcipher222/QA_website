<?php

session_start();

include 'dbconnection.php';

$userid=$_SESSION['uid'];

echo $_POST['ans'].$_POST['ques_id'].$username;

$ans=$_POST['ans'];
$quesid=$_POST['ques_id'];

$query="update answers set ans='$ans' where question_id='$quesid' and answered_by='$userid';";

mysqli_query($conn,$query);


?>