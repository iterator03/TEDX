<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Countdown</title>
<style>
#countdown
{
width: 880px;
    margin: 10% auto;
	border-radius:10px;
    color: #8c2107;
    text-align: -webkit-center;
    text-shadow: 1.5px 2px 4px white;
    text-indent: inherit;
	height:auto;
	
}
#clock span
{
	float:left;
	text-align:center;
	font-size:60px;
	margin:0 2.5%;
	color:white;
	padding: 10px;
	width:15%;
	border-radius: 20px;
}

#clock span
{
background: black;	
opacity:0.8;
}
#units span
{
	float:left;
	text-align:center;
	font-size:22px;
	text-transform:uppercase;
	margin:40px;
	margin-left:35px;
	color:brown;
	width:104px;
	letter-spacing:2px;
	text-shadow: 1px 1px chocolate;
	font-family:serif;
}
#clock:after
{
	content:" ";
	display:block;
	clear:both;
}
span.turn
{
	animation:turn 0.7s ease-out;
}
@keyframes turn{
	
	0%
	{
		tranform:rotateX(0deg);
		
	}
	100%
	{
		transform:rotateX(360deg);
		background:black;
	}
}
</style>
<script src="countdown.js">
</script>

</head>

<body>
<div class="container">
<div class="row">
<div class="col-xs-4 col-md-1"></div>
<div class="col-md-8 col-sm-10">
<div id="countdown">
<!--<h2>TED <sup>x</sup> MNNIT</h2>-->
<div id="clock"></div>
<div id="units">
<span>Days</span>
<span>
Hours</span>
<span>Minutes</span>
<span>Seconds</span>
</div>
</div></div>
</div>
</div>
</body>
</html>