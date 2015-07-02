<?php

//echo "you are on logout page";

session_start();

unset($_SESSION['username']);

session_destroy();

header('Location:index.php');


?>