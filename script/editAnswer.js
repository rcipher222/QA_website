function editAns(){

var save_answer=$("#sans").text();

alert(save_answer);

editableText=$('<textarea style="width:520px; height:400px;" id="answer_text"/>');

editableText.val(save_answer);

$("#sans").replaceWith(editableText);

$("#atg").remove();


$("#ownans").append('<button class="btn btn-primary" onclick="submit_answer()">Update Answer</button>');
	
}

function submit_answer(){
	

var answer=$('#answer_text').val()

$.post("update_answer_db.php",{ans:answer,ques_id:question_id},function(data){
	

	
$("#answer_text").remove();


$("#ownans").remove();


$(".col-sm-5").append('<div class="answer" id="ownans" style="width:500px;word-wrap:break-word;"><span id="sans">'+answer+'</span><a href="#" onclick="editAns()" id="atg">&nbsp;Edit</a></div>');

	
});


	
}