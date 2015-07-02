<!DOCTYPE html>
<html lang="en">

<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<style type="text/css">

#form{
//border:solid red;
left: 70px;
position: relative;
top:30px;
}

body{
overflow: hidden;	
//background: url('images/home.jpg');
background-repeat: no-repeat;
//background-size:1368px 720px;
}

label,h3{
//color: white;	
}


</style>

</head>

<body>

<div class="container" id="cont">
<form class="form-horizontal" role="form" id="form" method="POST" action="validate.php">
  <div class="col-sm-offset-8"><h3>&nbsp;&nbsp;Returning Users</h3></div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-6" for="uname2">username:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="uname2" placeholder="Enter username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-6" for="pwd2">Password:</label>
    <div class="col-sm-3"> 
      <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-8 col-sm-10">
      <input type="submit" class="btn btn-primary btn-md">
    </div>
  </div>
</form>
</div>

<br><br>

<div class="container">
<form class="form-horizontal" role="form" id="form" method="POST" action="signup.php">
  <div class="col-sm-offset-8"><h3>&nbsp;&nbsp;New Users</h3></div>
  <br>
  <div class="form-group">
  <label class="control-label col-sm-2 col-sm-offset-6" for="fullname">Full Name:</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="fullname" placeholder="Enter full name" required name="fname">
  </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-6" for="email">email:</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="email" placeholder="Enter email-id" required name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-6" for="uname">username:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="uname" placeholder="Enter username" required name="uname">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-6" for="pwd">Password:</label>
    <div class="col-sm-3"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" required name="pwd">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-8 col-sm-10">
      <input type="submit" class="btn btn-primary btn-md">
    </div>
  </div>
</form>
</div>



</body>

</html>