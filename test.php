
<html>
<body>
<script type="text/javascript">
	function check(x){alert(x);}
</script>
<form>
	<input type="text" onkeypress="check(this.value)">
</form>




<form>
  <input name="myField" id="myField" type="text"><br/> 
  </form>
  <div id="output"></div> 
   
  <script type="text/javascript"> 
    $('#myField').keypress(function() { 
      var txtVal = this.value; 
        $("#output").text("You have entered " + txtVal); 
    }); 
  </script> -->


</body>

</html>