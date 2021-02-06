
<?php
			//Save Data Into DataBase
		
			$conn=mysqli_connect("localhost","root","","carstore");
			if(!$conn || ! mysqli_select_db($conn,'carstore'))
			{
				die("connection failed".mysqli_error($conn));
			}
			
			$n=$_POST['name'];
			$p=$_POST['mobile'];
			$e=$_POST['email'];
			$pw=$_POST['password'];
			
			$sql="INSERT INTO `singup`(`id`, `name`, `mobile`, `email`, `password`) VALUES ('','$n','$p','$e','$pw')";
			if(mysqli_query($conn,$sql))
			{
				$msg="register successfull";
				header('location:login.php');
				
			}
			else
			{
				echo "failed".mysqli_error($conn);
			}

			?>

