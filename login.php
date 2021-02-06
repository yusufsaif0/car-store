<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"></li>
	<style type="text/css">
		body{
			background:	#34495e;
		}
		#login{
			
			 box-shadow: 5px 2px 8px 0 rgba(0, 0, 0, 0.2), 3px 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.input-field:hover{
transform: translate(-2%,-2%);
		}
		.btn-danger{
			background-color: black;
			color: white;
			border-radius: 50px;
			text-align: center;
			outline: none;

		}
		}
		.btn-danger:hover{
			transform: translate(-5%,-50%);
			background-color: gray;

		}
			.btn-danger > a{
			text-decoration: none;

		}
	</style>
</head>
<body>
<div id="header">
<div>
<div class="logo">
<h1 style="color: white">Car Bazar</h1></div></div>
<ul id="navigation">
<li class="selected">
	<a href="index.php">Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="blog.php">Blog</a></li>
	<li><a href="singup.php">Singup</a></li>
	</ul>
</div>

</div>
<div id="login" style="margin:auto;max-width: 350px;margin-top: 150px;padding: 50px; background-color: black; text-align: center;">

<form name="f1" action="loginP.php" method="post" onsubmit="return validate()">
	<h1 style="color: white;text-align: center;">Login</h1>
	<i class="fa fa-user icon"></i>

<input  class="input-field" type="text" name="em" value="" placeholder="Email" style="background-color: black; color: white; border-radius: 50px; border:1px solid white;text-align: center;outline: none;"><br><br>
<i class="fa fa-key icon"></i>

<input class="input-field" type="password" name="pass" value="" placeholder="Password" style="background-color: black;color: white; transform: translate(-50%,-50); border-radius: 50px; border:1px solid white;text-align: center; outline: none;"><br><br>
	<button name="login" class="btn btn-danger">Login</button>
	<button class="btn btn-danger"><a href="singup.php">SingUp</button></a>
	<button class="btn btn-danger">Reset</button>
</form>
	</div>
	<script type="text/javascript">
		function validate()
		{
var e=document.f1.em.value;
var p=document.f1.pass.value;
if(e.length=="" && p.length=="")
{
	alert("please filed detailes");
		}
else{
if(e.length=="")
{
	alert("email is required");
}
if(p.length=="")
{
	alert("password is required");
}
}}
	</script>
</body>
</html>