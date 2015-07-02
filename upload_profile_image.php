<<!DOCTYPE html>
<html>
<body>
<script type="text/javascript">
	alert("fdfdsfsdfsdf	");
</script>
</body>
</html>
<?php

session_start();

include 'dbconnection.php';




if(isset($_FILES['userfile']['type'])){
	
	$validExtensions=array("jpeg","png","jpg");
	
	$temporary=explode(".",$_FILES['userfile']['name']);
	
	$file_extension=end($temporary);
	
	echo $file_extension;
	
	if(  ($_FILES['userfile']['type']=="image/png" || 
	$_FILES['userfile']['type']=="image/jpg" || $_FILES['userfile']['type']=="image/jpeg") && 
	 ($_FILES['userfile']['size']<1000000) && (in_array($file_extension,$validExtensions)) ){
		
		
	     echo 'Yes';
	     
	     	     
	     if($_FILES['userfile']['error']>0){
	     	
	     	echo 'There is some error';	     	     	
	     	
	     }
	     
	     elseif(file_exists("pimage/".$_FILES['userfile']['name'])) {
	      
	      //check code for file already exists
	      
	      echo 'file already exists';
	
	     }
	     
	     else{
	     	 
	     	 //upload the file
	     	 
	     	 $sourcePath=$_FILES['userfile']['tmp_name'];
	     	 $targetPath="pimage/".$_SESSION['uid'].'/'.$_FILES['userfile']['name'];
	     	 
	     	 echo $targetPath."\n";
	     	 
	     	 move_uploaded_file($sourcePath, $targetPath);    	  
	     	 
	     	 //*****code remaining for updating the database*****//
	     	 
	     	$filename=$_FILES['userfile']['name']; 
	     	$username=$_SESSION['username'];
	     	 
	     	$query="update user set profileimg='$filename' where username='$username';";
	     	 
	     	$result=mysqli_query($conn,$query);
	     	 
	     	 echo 'File has been uploaded successfully';
	     	 
	     	
	     }
	     
   }

}

else{

echo 'Sorry Your File cannot be uploaded-->invalid file type or size';	
	
}

?>