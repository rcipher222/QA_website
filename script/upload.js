
$(document).ready(function(e){
	
$("#upload_link").on('click',function(e){
	 e.preventDefault();
	 
	 //$("#upload_submit:hidden").trigger('click');	 
	 
	 $("#upload:hidden").trigger('click');
	 
	 $("#upload").change(function(){
	 	
        $("#upload_submit").click();
                
        //alert('hello again');
        
        var file=this.files[0];
        
        var imagefile=file.type;
        
        var reader=new FileReader();
        
        reader.onload=imageIsLoaded;
        
        reader.readAsDataURL(this.files[0]);

        
	 	
	 	});	 
	 
	 	
	});	
	
});


function imageIsLoaded(e){
	
	$("#disp_p_image").attr('src',e.target.result);
	
}


$(function(){
	
	$("#uploadImage").on('submit',function(e){
		
        e.preventDefault();
        
        //alert('hello');
        
   $.ajax({
    
    url:"upload_profile_image.php",
    type:"POST",
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    ///check if working properly///   	
    });
    
    			
		});
	
	});

