<?php 
$dbConn = pg_connect("host=
ec2-23-22-191-232.compute-1.amazonaws.com port=5432 dbname=d9kre3i7166g8k user=gmpgirnharzwij password=9747f761fd35e62bfb0e8db8b073598e6f674ee9ae63563a4b6c00ea3e9e11e0");
if (!$dbConn) {
    echo "An error occurred.\n";
    exit;
}else{
	echo"ok";
}
