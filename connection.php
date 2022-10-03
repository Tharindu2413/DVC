<?php 
	// session_start();
    $Host = "localhost";
    $User = "root";
    $Password = "root";
    $Database = "test7";

try
{
$con=mysqli_connect($Host, $User, $Password, $Database);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>