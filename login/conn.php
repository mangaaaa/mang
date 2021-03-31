<?php 
$servername="
ec2-23-22-191-232.compute-1.amazonaws.com";
$username="gmpgirnharzwij";
$password="9747f761fd35e62bfb0e8db8b073598e6f674ee9ae63563a4b6c00ea3e9e11e0";
$dbname="d9kre3i7166g8k";
$conn=pg_connect($servername,$username,$password,$dbname);
if (!$conn) {
	echo "An error occurred.\n";
    exit;
} 
 ?>
