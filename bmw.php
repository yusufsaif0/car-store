<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	/*	.bg-one{background:url(image/bmw/london.jpg);}
		.bg-two{background:url(image/bmw/bmwl.jpg);}
		.bg-three{background:url(image/bmw/bmwl.jpg);}
		.bg-four{background:url(image/bmw/bmwl.jpg);}
		.bg-five{background:url(image/bmw/bmwl.jpg);}
		.bg-six{background:url(image/bmw/bmwl.jpg);}
		*/
		.wrapper{
                 text-align: center;
		}
	.parent {
   margin: 0.5px;
        overflow: hidden;
    position: relative;
    float: left;
    display: inline-block;
	cursor: pointer;
}
	.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    transition: all .5s;
    box-shadow: 0 5px black;
}
span {
    display: none;
    font-size: 15px;
    color: white !important;
    font-family: sans-serif;
    text-align: center;
    margin: auto;
    position: absolute;
    top: 200px;
    left: 0;
    bottom: 0;
    right: 0;
    height: 10px;
    cursor: pointer;
}
.parent:hover .child, .parent:focus .child {
    transform: scale(1.1);
}
.parent:hover .child:before, .parent:focus .child:before {
    display: block;
}
.parent:hover span, .parent:focus span {
    display: block;
}
.im1:hover{
	opacity: 0.9;

}
.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(52,73,94,0.75);
}


	</style>
		
</head>
<body>
<div id="header">
<div>
<div class="logo">
<h1 style="color: white">Car Bazar</h1></div>
<ul id="navigation">
<li class="selected">
	<a href="index.php">Home</a></li>
	<li><a href="gallery.php">Gallery</a></li>
	<li><a href="blog.php">Blog</a></li>
	<li><a href="singup">Singup/Singin</a></li>
	</ul>
</div>
</div>
<div class="wrapper">
<div class="parent" onclick="">
	<div class="child bg-one">
		<a href="bmw1S.php"><img class="im1" src="image/bmw/bmw3s/bmw3s1.jpg" height="600px"; width="880px" style="float: left;"></a>
		<span>BMW 3 SERIES</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-two">
		<a href="bmwx1.php"><img src="image/bmw/bmwx1/bmwx1gf.gif" height="300px"; width="466px" style="float: left;"></a>
		<span>BMW X1</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-three">
		<a href="bmw5series.php"><img src="image/bmw/bmw5s/bmw5sgf.gif" height="300px"; width="466px" style="float: left; display: inline-block;"></a>
		<span>BMW 5 SERIES</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-four">
		<a href="bmw7series.php"><img src="image/bmw/bmw7s/bmw7sgf.gif" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>BMW 7 SERIES</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-five">
	<a href="bmwx5.php"><img src="image/bmw/bmwx5/bmwx51.jpg" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>BMW X5</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-six">
		<a href="bmwx7.php"><img class="im1" src="image/bmw/bmwx7/bmwx7gf.gif" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>BMW X7</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-four">
		<a href="bmwz4.php"><img class="im1" src="image/bmw/bmwz4/bmwz4gf.gif" height="600px"; width="880px" style="float:left; display: inline-block;"></a>
		<span>BMW Z4</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-five">
		<a href="bmwm4.php"><img class="im1"src="image/bmw/bmwm4/bmwm41.jpg" height="300px"; width="466px" style="float: left; display: inline-block;"></a>
		<span>BMW M4</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-six">
		<a href="bmws8.php"><img class="im1" src="image/bmw/bmw8s/bmw8s1.jpg" height="300px"; width="466px" style="float: left; display: inline-block;"></a>
		<span>BMW S8</span>
	</div>
</div>
</div>
<div class="footer" style="background-color: #343a40; margin-top: 1510px;width: auto; text-align: center;height: 80px;color: white;line-height: 20px;padding-top: 45px">
	&copy; carbazar.com | design by YUSUF SAIF
</div>
</body>
</html>