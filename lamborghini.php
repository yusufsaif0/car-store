<!DOCTYPE html>
<html>
<head>
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
<h1 style="color: white">Car Bazar</h1></div></div>
<ul id="navigation">
<li class="selected">
	<a href="index.php">Home</a></li>
	<li><a href="blog.php">Blog</a></li>
	<li><a href="singup">Singup/Singin</a></li>
	</ul>
</div>
</div>
<div class="wrapper">
<div class="parent" onclick="">
	<div class="child bg-one">
		<a href="lamborginihuracan.php"><img class="im1" src="image/lamborgini/img4.jpg" height="600px"; width="880px" style="float: left;"></a>
		<span>Huracan</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-two">
		<a href="lamborginihuracanspyder.php"><img src="image/bmw/bmwx1/bmwx1gf.gif" height="300px"; width="465px" style="float: left;"></a>
		<span>Hurcana Spyder</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-three">
		<a href="lamborginihuracanevo.php"><img src="image/bmw/bmw5s/bmw5sgf.gif" height="300px"; width="465px" style="float: left; display: inline-block;"></a>
		<span>Huracan Evo</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-four">
		<a href="lamborginihuracanevospider.php"><img src="image/bmw/bmw7s/bmw7sgf.gif" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>Huracab Evo Spyder</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-five">
		<a href="lamborginihuracanperformant.php"><img src="image/lamborgini/img2.jpg" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>Huracan Performante</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-six">
		<a href="lamborginihuracanperformantspyder.php"><img class="im1" src="image/bmw/bmwx7/bmwx7gf.gif" height="300px"; width="447px" style="float: left; display: inline-block;"></a>
		<span>Performante Spyder</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-four">
		<a href="lamborginiaventador.php"><img class="im1" src="image/bmw/bmwz4/bmwz4gf.gif" height="600px"; width="880px" style="float:left; display: inline-block;"></a>
		<span>Aventador</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-five">
		<a href="lamborginiaventadorsroadster.php"><img class="im1"src="image/lamborgini/img3.jpg" height="300px"; width="465px" style="float: left; display: inline-block;"></a>
		<span>Aventador S Roadster</span>
	</div>
</div>
<div class="parent" onclick="">
	<div class="child bg-six">
		<a href="lamborginiaventadorsvj.php"><img class="im1" src="image/lamborgini/img1.jpg" height="300px"; width="465px" style="float: left; display: inline-block;"></a>
		<span>Aventador SVJ</span>
	</div>
</div>

	</div>
</body>
</html>