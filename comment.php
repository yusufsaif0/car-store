<?php
			//Save Data Into DataBase
		
			$conn=mysqli_connect("localhost","root","","carstore");
			if(!$conn || ! mysqli_select_db($conn,'carstore'))
			{
				die("connection failed".mysqli_error($conn));
			}
			$e=$_POST['Email'];
			$m=$_POST['message'];
			
			$sql="insert into comment(email,comment) values('$e','$m')";
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('we will contact you soon')</script>";
			}
			else
			{
				echo "failed".mysqli_error($conn);
			}
header('location:index.php')
			?>