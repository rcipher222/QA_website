<?php

session_start();

include 'dbconnection.php';

$username=$_SESSION['uid'];

echo $_POST['ans'].$_POST['ques_id'].$username;

$ans=$_POST['ans'];
$quesid=$_POST['ques_id'];

$query="insert into answers (ans,answered_by,question_id) values ('$ans','$username','$quesid');";

mysqli_query($conn,$query);

?>