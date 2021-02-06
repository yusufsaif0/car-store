<?php

$conn=mysqli_connect("localhost","root","","carstore");
$em=$_POST['em'];
$pwd=$_POST['pass'];
$sql="select * from singup where email='$em' && password='$pwd'";
$query=mysqli_query($conn,$sql);
if(mysqli_num_rows($query))
{
	
	header('location:index.php');

}
else
{ 
header('location:login.php');
}

?>

