<?php

include 'header.php';

include 'dbconnection.php';


$userid=$_SESSION['uid'];

$str=$_SERVER['QUERY_STRING'];

$query="select question_text from question";

$result=mysqli_query($conn,$query);

$storeQues = Array();
while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    $storeQues[] =  $row['question_text'];  
}

 $countQues = count($storeQues);
   /* Checking the array of question
    for($x = 0; $x < $countQues; $x++) {
    echo $storeQues[$x];
    echo "<br>";} */

// $s = $_GET["w1"];
// echo $s;

?>
