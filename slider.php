<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SLIDER</title>
<script type="text/javascript" src="bootstrap-3.3.7-dist/jquery-1.12.0.min.js" >
</script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/jquery.cycle2.min.js"></script>

<style>
*{
	margin:0;
	padding:0;
}
#container{
	height:700px;
	width:100%;
	overflow:hidden;
	position: relative;
    top: 18px;
    z-index: -21;
	opacity:0.9;
}
#slider{
	height:400px;
	width:100%;
}
#slider img
{
	height:640px;
	width:100%;
	opacity:0.7;
}
#prev{
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	margin:auto 10px;
	z-index:100;
}
#next{
	position:absolute;
	top:0;
	bottom:0;
	right:0;
	margin:auto 10px;
	z-index:100;
}
</style>
<script>
var pre=document.getElementById("prev");
var next=document.getElementById("next");
var slideIndex=1;
function prev(n)
{
	slideIndex=+n;
}
</script>
</head>

<body>
<div id="container">
<div id="slider" class="cycle-slideshow" data-cylce-fx="fade" data-cycle-speed="600" data-cycle-timeout="3000" data-cycle-prev="#prev" data-cycle-next="#next" 
data-cycle-manual-fx="scrollHorz" data-cycle-manual-speed="400">

<img src="images/img1.jpg"/>
<img src="images/img2.jpg"/>
<img src="images/img3.jpg"/>

</div>
<!--<img id="prev" src="images/Entypo_e765(0)_48.png"/>
<img id="next" src="images/Entypo_e766(0)_48.png"/>-->
</div>
</body>
</html>