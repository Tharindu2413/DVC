<?php 
	// session_start();
    $Host = "awseb-e-nerpbsjkeg-stack-awsebrdsdatabase-2rdn0nhvira6.crzldysbxrpc.us-east-1.rds.amazonaws.com";
    $User = "root";
    $Password = "admin2413";
    $Database = "ebdb";

try
{
$con=mysqli_connect($Host, $User, $Password, $Database);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>