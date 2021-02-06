<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="validate.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"></li>
	<style type="text/css">
		body{
			background:	#34495e;
		}
		.input-field:hover{
transform: translate(-2%,-2%);
		}
		#login{
			
			 box-shadow: 5px 2px 8px 0 rgba(0, 0, 0, 0.2), 3px 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.input-field:hover{

		}
		.btn-danger{
			background-color: black;
			color: white;
			border-radius: 50px;
			text-align: center;
			transform: 

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
	
	<li><a href="blog.php">Blog</a></li>
	<li><a href="singup.php">Singup</a></li>
	</ul>
</div>

</div>
<div id="login" style="margin:auto;max-width: 350px;margin-top: 100px;padding: 50px; background-color: black; text-align: center;">
<form name="f2" action="singupP.php" method="post" onsubmit="return validate()">
	<h1 style="color: white;text-align: center;">Sign Up</h1>
	<i class="fa fa-user icon"></i>
<input id="f1"  class="input-field" type="text" name="name" value="" placeholder="Name" style="background-color: black; color: white; border-radius: 50px; border:1px solid white;text-align: center;outline: none;"><span id="t1"></span>
<br><br>

<i class="fa fa-phone icon"></i>
<input id="f2"  class="input-field" type="text" name="mobile" value="" placeholder="Mobile Number" style="background-color: black; color: white; border-radius: 50px; border:1px solid white;text-align: center;outline: none;"><span id="t2"></span><br><br>
<i class="fa fa-envelope icon"></i>
<input id="f3"  class="input-field" type="text" name="email" value="" placeholder="Email" style="background-color: black; color: white; border-radius: 50px; border:1px solid white;text-align: center;outline: none;"><span id="t3"></span><br><br>

<i class="fa fa-key icon"></i>
<input id="f4" class="input-field" type="password" name="password" value="" placeholder="Password" style="background-color: black;color: white; transform: translate(-50%,-50); border-radius: 50px; border:1px solid white;text-align: center; outline: none;"><span id="t4"></span><br><br>
	<button class="btn btn-danger">Login</button>
	
	<button class="btn btn-danger">Reset</button>
</form>
	</div>
<script type="text/javascript">
	function validate()
	{
		var n=document.f2.name.value;
		var m=document.f2.mobile.value;
		var e=document.f2.email.value;
		var p=document.f2.password.value;
	if(n.length=="" && m.length=='' && e.length=='' && p.length=='')
	{
		alert("please filed all filed");
	}	
	else {
		if(n.length=='')
		{
			alert("name is required");
		}
		if(m.length=='')
		{
			alert("number is required");
		}
		if(e.length=='')
		{
			alert("email is required");
		}
		if(p.length=='')
		{
			alert("password is required");
		}
	}
	}
</script>
</body>
</html>