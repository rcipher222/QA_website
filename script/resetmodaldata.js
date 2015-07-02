//alert('hello reset');
$(document).ready(function(){
$('[data-dismiss=modal]').on('click', function (e) {
   //alert('hello');
   
   
   var $t = $(this),
        target =$t.parents();
    
  $(target)
    .find("textarea")
       .val('');
   
});


$('#myModal').on('hidden.bs.modal', function(){
	 //alert('hello');
	 $("#message").remove();
    $("#q_text").val('');
});



});
