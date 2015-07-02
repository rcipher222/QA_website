//alert('hello');

$(document).ready(function(){

str=window.location.search.substring(1);

//alert(str);

str=decodeURI(str);

//alert(str);

str=str.split(" ");

nstr=str[str.length-1].split("?");

question_str="";

//alert(nstr);

for(i=0;i<str.length-1;i++)
   question_str=question_str+str[i]+" ";
   
question_str=question_str+nstr[0]+"?";

question_id=nstr[1];

//alert(question_str);

alert(question_id);
 
$("#question_text").text(question_str);
	
});
