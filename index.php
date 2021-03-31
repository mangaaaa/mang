<?php 
$dbConn = pg_connect("host=
ec2-23-22-191-232.compute-1.amazonaws.com port=5432 dbname=d9kre3i7166g8k user=gmpgirnharzwij password=9747f761fd35e62bfb0e8db8b073598e6f674ee9ae63563a4b6c00ea3e9e11e0");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}else{
	echo"ok";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=$_POST['name'];
	$password=$_POST['pass'];
	$user= pg_query($dbConn, "SELECT * FROM login where us='{$username}' AND pw='{$password}'"));
	if ($user) {
		$_SESSION['login']=$user['us'];
		header('location: a.php');
		die;
	}else{
		echo "Wrong account information";}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
<link rel="icon" href="https://img.icons8.com/fluent/96/000000/data-configuration.png"/>
 	<link rel="stylesheet" type="text/css" href="aset/admin.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<title>Login form</title>
 </head>
 <body style="background-image: url(img/login.jpg)">
 <div class="container">
  <h2 style="text-align: center; font-size: 30px">Welcome to login form </h2>
  <form class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
 </body>
 </html>

