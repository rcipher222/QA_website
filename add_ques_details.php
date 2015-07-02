
<?php


include_once 'dbconnection.php';
//echo $_POST['category'].$_POST['ques'];

session_start();

$question=$_POST['ques'];

$category=$_POST['category'];

$userid=$_SESSION['uid'];

$question=addslashes($question);

$query="insert into question (question_text,asked_by) values ('$question','$userid');";

mysqli_query($conn,$query);	

$query="select question_id from question where question_text='$question';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_row($result);

//echo 'hello'.$userid.$question.$row[0];

$arr=explode(",",$category);
for($i=0;$i<count($arr)-1;$i++){
  
 //  echo $arr[$i];
   
   $query="insert into quescat (question_id,category_id) values ('$row[0]','$arr[$i]')";
   
   mysqli_query($conn,$query);
	
}
//echo the question id to use this id as the get parameter
echo $row[0];
?>