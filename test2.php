<?php

include 'dbconnection.php';

echo $virat;

$query="update user set profileimg='gauta.jpg' where id=1;";

$result=mysqli_query($conn,$query);


?>