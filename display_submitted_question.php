<?php

include 'header.php';

include 'dbconnection.php';

//session_start();

$userid=$_SESSION['uid'];

$str=$_SERVER['QUERY_STRING'];

$quesid=substr(strrchr($str,"?"),1);

$query="select ans from answers where answered_by='$userid' and question_id='$quesid'";

$result=mysqli_query($conn,$query);

$nrow=mysqli_num_rows($result);
//echo $nrow;
if($nrow==1){
echo '
<script>
$(document).ready(function(){
	
$("#answer_area").remove();	
$("#rem").remove();
	
});
</script>
';  }
    
?>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="script/display_ques.js"></script>

<script>

function post_question(){
//alert('hello');	
 
var answer=document.getElementById("answer_text").value;
//alert(question_id);
//alert(answer);
$.post("add_answer_db.php",{ans:answer,ques_id:question_id},function(data){
	
alert(data);
$("#answer_area").remove();	
$("#rem").remove();
$(".col-sm-5").append('<div class="answer" id="ownans" style="width:500px;word-wrap:break-word;"><span id="sans">'+answer+'</span><a href="#" onclick="editAns()" id="atg">&nbsp;Edit</a></div><hr>');
	
});
//a user is allowed to post only one answer for a question------------>done
//  fix bug on refresh //------------------------>done
///////   add edit answer feature     ////////// 
	
}
function foo(){
alert('hello');
	
}
</script>

<style type="text/css">
/*
#answer_area{
width: 460px;	
height: 80px;
}
#answer_text{
height: 50px;
position: relative;
top: -7px; 
left: -8px;
}*/
#question_topics{
//border:solid;
text-align: center;	
}
#qtopics{
//position: relative;
//left: 50px;	
//text-align:center; 
}
.ans{
width: 500px;
word-wrap: break-word;	
}
</style>

<script src="script/editAnswer.js"></script>

</head>


<body>

<div class="row">

<div class="col-sm-3" id="question_topics">

<span id="qtopics"><h5>Question Topics</h5></span>
<?php
//session_start();
//get all the topics for this question id
include 'dbconnection.php';
$str=$_SERVER['QUERY_STRING'];
$quesid=substr(strrchr($str,"?"),1);
//echo $quesid;
$query="select distinct category_name from category natural join quescat where question_id='$quesid';";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_row($result)){
echo '<a href="#" class="qtlist" class="well">'.$row[0].'<br><br></a>';
	
}
?>

</div>

<div class="col-sm-5" id="fi">
<h4><span id="question_text"></span></h4>
<hr>


<div class="well" id="answer_area">
<hr>
<textarea cols="50" rows="3" placeholder="Write your Answer" id="answer_text"></textarea>
<hr>
<button type="button" class="btn btn-primary" onclick="post_question()">Post Answer</button>



</div>

<span id="rem"><hr></span>

<?php
//session_start();

$str=$_SERVER['QUERY_STRING'];

$quesid=substr(strrchr($str,"?"),1);

//echo $quesid;

include 'dbconnection.php';

$query="select ans,answered_by from answers where question_id='$quesid';";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_row($result)){

if($row[1]==$_SESSION['uid'])
echo '<div class="ans" id="ownans"><span id="sans">'.$row[0].'</span>&nbsp;<a href="#" onclick="editAns()" id="atg">Edit</a></div>';
else
echo $row[0];
echo '<hr>';
	
}
?>

</div>


</div>

</body>


</html>
