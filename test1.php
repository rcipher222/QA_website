<?php

/*$a=10;

echo '

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

function fun1(a){

//alert(a);

$.post("up.php",{moviename:a},function(data){
  alert(data);	
	});
	
}

</script>

</head>

<body>

<form id=f'.$a.' action="up.php" method="POST"></form>

<button onclick="fun1('.$a.')">My name is khan and i am </button>

</body>

</html>
';*/

$ar
r=explode(",","1,2,3,4,");

echo count($arr);

for($i=0;$i<4;$i++)
  echo $arr[$i];


?>