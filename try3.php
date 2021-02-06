 <!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript" src="jqcycleplugin.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
$(document).ready(function(){
$(".img").cycle("scrollLeft");
});	

	
</script>
<style type="text/css">
	body{
		background-color: #FFFFF0;
		height: 100%;
	}
	.icon{
	font-size: 25px;
	width:25px;
	padding: 20px;
	max-width: 25px;
	color:white;
}
.imgb{
		border: 1px solid white;
	}
	#p1{
		 box-shadow: 3px 4px 8px 0 rgba(0, 0, 0, 0.2), 3px 6px 20px 0 rgba(0, 0, 0, 0.19);
	}


 
.footer1{
	background-color: #303036;

		height: 400px;
	color: white;
	position: relative;
}
.footer1 .footer1-bottom{
background-color: #343a40;
position: absolute;
height: 50px;
padding-top: 25px;
color: white;
text-align: center;
bottom:0px;
left:0px;
width: 100%;

}
.footer1 .footer1-content{
	border:1px solid red;
	height: 350px;
	display: flex;
}
.footer1 .footer1-content .footer1-section{
flex: 1px;
padding: 25px;
border: 1px solid green;
}
.footer1 .footer1-content h1 .footer1 .footer1-content h2,{
	color:white;
}
.footer1 .footer1-content .about h1 span{
	color: gold;
}
.footer1 .footer1-content .about .contact span{
	display: block;
	font-size: 1.1em;
	margin-bottom: 8px;
}
.footer1 .footer1-content .about .socials a{
	border:1px solid gray;
	width: 45px;
	height: 41px;
	padding-top: 5px;
	margin-right: 5px;
	text-align: center;
	display: inline-block;
	font-size: 1.3em;
	border-radius: 5px;
	transition: all .3s;
}
.footer1 .footer1-content .about .socials a:hover{
border:1px solid white;
color: white;
transition: all .3s;
}
.footer1 .footer1-content .links ul a{
display: block;
margin-bottom: 8px;
font-size: 1.2em;
transition: all .3s	
}
.footer1 .footer1-content .links ul a:hover{
	color: white;
	margin-left: 15px;
	transition: all .3s
}
.footer1 .footer1-content .contact-form .contact-input{
	background: #272727;
	color:#bebdbd;
	margin-bottom: 10px;
	line-height: 1.5rem;
	padding: .9rem 1.4rem;
	border:none;
	width: 100%;
}
.footer1 .footer1-content .contact-form .contact-input:focus{
	background: #1a1a1a;
}
.btn-big{
	padding: .7rem 1.3rem;
	line-height: 1.3rem;
	background-color: 
} 
.btn-info {
	background-color: #272727 ;
	border: none;
	

}
.btn-group{
padding: 10px;
}


</style>
</head>
<body>
<div id="header">
<div>
<div class="logo">
	<a href="index.html"><img src="image/logo.png"></a>
</div>
<ul id="navigation">
<li class="selected">
	<a href="index.php">Home</a></li>
	<li><a href="gallery.php">Gallery</a></li>
	<li><a href="blog.php">Blog</a></li>
	<li><a href="singup">Singup/Singin</a></li>
	</ul>
</div>
</div>
<div class="container-fluid" style=" background-color:#272727; padding-left:180px;">
  
  <div class="btn-group">
    <button type="button" class="btn btn-info">BMW</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  </div>
  
  <div class="btn-group">
    <button type="button" class="btn btn-info">AUDI</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
</div>
  <div class="btn-group">
    <button type="button" class="btn btn-info">BUGATTI</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  </div>
  <input type="search" placeholder="search....." style="background-color: black; float: right; border: none;margin-right: 200px;margin-top: 15px;color: white;width: 400px">
</div>
<div id="banner" style="height: 100%;">
	<div class="img">
		<img src="image/banner4.jpg" width="1345px"; height="625px;">
		
	</div>
	
</div>
<br>
<br>

<div class="content" style="height:100%; background-color: pink">

<div id="content1" style="margin:auto;max-width: 1000px; display:inline-block;">
	<div class="image">
	<img src="image/image1.jpg" height="200px" width="300px;">
	
	<div class="desp">   </div>
</div>
	<div class="image">
	<a href="bugatti.php"><img src="image/image41.jpg" height="200px" width="300px;"></a>
	<div class="desp" style="font-size: 15px;">BMW New X6 <br>Feb 2020 <br>  ₹  1.1-16 Crore</div>

	</div>
	<div class="image">
    <a href="rollRoyce.php"><img src="image/image51.jpg" height="200px" width="300px;"></a>
	<div class="desp" style="font-size: 15px;">BMW i8 Roadster<br>Mar 2020 <br> ₹ 2.8 - 3 Crores</div>
	</div>

	<div class="image">
	<a href="bugatti.php"><img src="image/image41.jpg" height="200px" width="300px;"></a>
	<div class="desp" style="font-size: 15px;">BMW New X6 <br>Feb 2020 <br>  ₹  1.1-16 Crore</div>

	</div>
	<div class="image">
    <a href="rollRoyce.php"><img src="image/image51.jpg" height="200px" width="300px;"></a>
	<div class="desp" style="font-size: 15px;">BMW i8 Roadster<br>Mar 2020 <br> ₹ 2.8 - 3 Crores</div>
	</div>
	<div class="image">
    <a href="rollRoyce.php"><img src="image/image51.jpg" height="200px" width="300px;"></a>
	<div class="desp" style="font-size: 15px;">BMW i8 Roadster<br>Mar 2020 <br> ₹ 2.8 - 3 Crores</div>
	</div>
	
</div>








</div>
	<div class="footer1">
		<div class="footer1-content">
			<div class="footer1-section about">
				<h1 class="logo-text"><span>CAR</span>BAZAR</h1>
				<p>
					car bazar is place where you can see or 
					search all your favourit car at one place
				</p>
				<div class="contact">
					<span><i class="fa fa-phone"></i>&nbsp;7992337665</span>
					<span><i class="fa fa-envelope">&nbsp; yusufsaif0@gmail.com</i></span>
			</div>
			<div class="socials">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
			     <a href=""><i class="fa fa-instagram"></i></a>
			</div>
			</div>
			<div class="footer1-section links">
				<h2>Quick Links</h2>
				<br>
				<ul>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
					<a href=""><li>link1</li></a>
				</ul>
			</div>
			<div class="footer1-section contact-form">
				<h2>Contact-Us</h2>
				<form action="" method="post">
					<input type="email" name="email" class="text-input contact-input" placeholder="Your Email Address...">
					<textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea><br>
					<button type="submit" class="bt btn-big"><i class="fa fa-envelope">send</i></button>
				</form>
			</div>

		</div>
		<div class="footer1-bottom">
			&copy; carbazar.com | design by YUSUF SAIf
		</div>
	</div>
</body>
</html>