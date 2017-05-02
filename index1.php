<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

<title>TEDX MNNIT</title>
<!--Favicon-->
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

<script src="jquery-3.1.0.min.js"></script>
<!--Jquery -->
<script src="bootstrap-3.3.7-dist/jquery-1.12.0.min.js"></script>

<!--Custom fonts
<link href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.woff2" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.ttf" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.svg" rel="stylesheet" type="text/css"/>-->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--animation -->
<link href="animate.css" rel="stylesheet"/>
<link href="tedx.css" rel="stylesheet"/>


<!--Script -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86157556-1', 'auto');
  ga('send', 'pageview');

</script> 

<script>
$(window).load(function(){

  $('#mask').fadeOut(2500);
});


$(document).ready(function() {
    $("#btn").click(function(){
		$("#showit").show();
		$("#btn").hide();
		
	});
	
});
</script>

<script>
$(document).ready(function(){
setInterval(function(){
		
	$('#slider ul').animate({marginLeft:'-900px'},2000,function(){
		$(this).find("li:last").after($(this).find("li:first"));
	$(this).css({marginLeft:0});
	});
},8000);

});
</script>
<script>
function parallax()
{
	var prl=document.getElementById("header");
	prl.style.top=-(window.pageYOffset/8)+'px' ;
}

window.addEventListener("scroll",parallax,false);
</script>

<style>
				#mask{
				width:100%;
				height:100vh;
			background-color:rgb(44,44,44);
			background-size:cover;
				position:fixed;
				top:0;
				left:0;
				z-index:1000;
			
			}
			#loader{
				width:50%;
				min-height:10px;
				position:relative;
				top:50%;
				left:64%;
				transform:translate(-50%,-50%);
			}
			#mask img{
		      	
				width:40%;
				height:auto;
				border-radius:20px;
				padding:10px;
				background-position:center;
			}
		
		
		#sponsors
{
	height:560px;
	width:100%;
	margin:20px auto;
	padding:12px;
   /*background:linear-gradient(white,lightgrey);*/
   background:whitesmoke;
}
.row1 img
{
	height:180px;
	padding:5px;
	width:200px;
}
.row1
{
	height:200px;
	width:220px;
	padding:10px;
	float:left;
	margin:20px;
}
#venue
{
	    height: 200px;
    width: 100%;
    color: white;
    font-size: 26px;
    font-weight: 700;
    margin: 20px auto;
    background: url(images/back.jpg);
    background-size: contain;
    text-shadow: 2px 2px 5px chocolate;
}

#team img
{
	height:200px;
	width:250px;
	border-radius:40%;
}
#countdown_con
{
    margin: 20px;
    margin-left: 47px;
    padding: 10px;
    height: 350px;
    background-image: url(images/back7.jpg);
    background-size: contain;
    border-radius: 40px;
}
.team1
{
	text-align:center;
	margin:10px;
	margin-bottom:7%;
	width: 700px;
    /*border: 2px inset grey;*/}
	
	.team2
	{
		margin:10px;
		margin-bottom:7%;
		width: 700px;
    /*border: 2px inset grey;*/
	}
	.team3
	{
		margin:10px;
		width: 700px;
    /*border: 2px inset grey;*/
	}
	
		.cont
		{
			float:left;
			text-align:center;
		}
		.row{
			text-align:center;
		}
		#container1
		{
			margin-left:28%;
			width:auto;
		}
		#showit
		{
			display:none;
		}
		
			ul#adjust
			{
				padding:10px;
				list-style:none;
				margin:20px;
				margin-left:30px;
			}
			.h{
				display:none;
			}
			.rollIn
			{
				animation-delay:3s;
				animation-timing-function:ease-in-out;
			}
			#slogan
{    text-decoration: overline;
    font-size: 26px;
    text-shadow: 2.5px 2.2px 3px #56111b;
    color: chocolate;
    letter-spacing: 1.2px;
    word-spacing: 5px;
    text-align: center;
    height: 45px;
    padding: 13px;
}
			.jumbotron
			{
				
				background:#150a0a;
		
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 50px;
    color: inherit;}

			#register
			{
			 background:whitesmoke;
		      height:200px;
			  width:inherit;
			  box-shadow:2px 2px lightgrey;
			  
			}
			#register a
			{
			    font-family: sans-serif;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    position: relative;
    top: 69px;
    left: 40%;
    margin-top: 48px;
    padding: 10px;
    font-size: 24px;
    text-shadow: 2px 1px 2px;
    word-spacing: 1.1px;
    color: #771618;
    letter-spacing: 1.1px;
			}
			
			#speakers .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 25px;
    margin-top: 15px;
    margin-left: 12px;
    line-height: 1.42857143;
    background-color: #150a0a;
    border: 2px inset #cbdedd;
    border-radius: 16px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
    transition-property: border;
    transition-duration: 0.2s;
    transition-timing-function: ease-in-out;
    transition-delay: initial;
}
#speakers .thumbnail>img {
    display: block;
    max-width: 90%;
    padding: 10px;
   
}
#speakers .thumbnail .caption {
    padding: 0px;
    color: chocolate;
    font-stretch: condensed;
    font-weight: 800;
}

#content
{
	height:420px;
	width:auto;
	margin:15px auto;
}
#parra{
	height:inherit;
	width:auto;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	overflow:hidden;
	text-align:justify;
	padding:2px;
	margin:5px;
	float:left;
color:black;
margin-bottom:-13px;
}
.modal-header {
    padding: 8px;
    border-bottom: 1px solid #7b1616;}
#parra p
{
	color:rgba(25, 2, 2, 0.98);
    word-spacing: 5px;
    font-size: 17px;
    font-family: initial;
    text-align: justify;
	margin-bottom:-15px;
}
	
h2#set{
	margin-top:15px;
	color:#230D0;
	text-shadow:2px 2px 3px whitesmoke;
	margin-bottom:-4px;
}

.aa
{
	height:40px;
	position:relative;
	bottom:100px;
	right:90%;
}
#additional a
{
	color:#261010;
	font-size:18px;}
	#additional a:hover
	{
		color:red;
		font-size:20px;}
		
		.modal-content {
    position: relative;
    background-color: rgba(245, 244, 241, 0.89);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 2px outset rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    color: darkred;
    z-index: 100;
    font-family: serif;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
    box-shadow: 5px 1px 9px rgba(0,0,0,.5);
}
	.modal-header {
    padding: 10px;
    border-bottom: -4px solid #7b1616;
    box-shadow: 1px 1px 3px;
	margin-bottom:-2px;}	
		
		.close img
		{
			z-index:1000;
		}
		
		.team1 img:hover
{
animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}
.team-head
{
color: #7d0910;
    text-shadow: 1px 1px 2px;
    width: 100%;
    box-shadow: 2px 2px 3px grey;
    border-bottom: 2px outset burlywood;
    padding: 6px;
    letter-spacing: 1.2px;
    word-spacing: 7px;
    margin-bottom: 7px;
    animation: slideInDown 2s ease-in-out;
	
}

#back-top
{
	position:relative;
	bottom:250px;
	right:567px;
	opacity:0.6;
}
#team
{
	width:100%;
	/*background:url(images/back9.jpg);*/
	
	background: url(images/back9.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}
	#speakers
{  margin:40px auto;
	height:auto;
	/*width:860px;*/
	text-align:center;
/*background:url(images/back9.jpg);*/
background:whitesmoke;
}

.sp img
{
	height:100px;
	width:130px;
	float:left;
	margin-left:45px;
	margin:40px;
	z-index:20;
	border:1px inset grey;
}
*/

</style>
<script>
function load()
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest() ;
		
	}
	else
	{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById('slide').innerHTML.responseText;
		}
    }
	
	xmlhttp.open('GET','slider.php',true);
	xmlhttp.send();
}

</script>
<script>
$(document).ready(function(){
  $('#menu li a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 2500);
       return false;
      }
    }
  });
});

</script>
</head>

<body data-spy="scroll" data-target="#main_nav" id="page-top" class="index" onLoad="load()">

<!--<div id="mask" style="display:block;">
<div id="loader">
<img src="images/load.gif" alt=" "/>
</div>
</div>-->

<div id="header">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="animated bounceIn" id="icon">
<h1 class="shake">TED<sup>x</sup> MNNIT
</h1>
<span id="adjust">&nbsp;IDEAS WORTH SPREADING</span>
</div></div></div>
<div class="col-md-2 col-sm-4"></div>
<div class="col-xs-12 col-sm-8">
<div id="menu">
<ul type="none" id="s1">
<li><a href="#" class="btn-primary page-scroll">HOME</a></li>
<li><a href="#about" class=" btn-primary page-scroll">ABOUT</a></li>
<li><a href="#speakers" class=" btn-primary page-scroll">SPEAKERS</a></li>
<li><a href="#sponsors" class=" btn-primary page-scroll">SPONSORS</a></li>
<li><a href="#team" class="btn-primary page-scroll">TEAM</a></li>
<li><a href="#venue" class="btn-primary page-scroll" >VENUE</a></li>
</ul>
</div></div>
</div>
</div>
<!--
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display 
    <<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><div class="animated bounceInDown" id="icon">
<h1 class="shake">TED<sup>x</sup> MNNIT
<!--<span id="adjust">&nbsp;IDEAS WORTH SPREADING</span>
</div></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="btn-primary">HOME</a></li>
<li><a href="#about" class=" btn-primary">ABOUT</a></li>
<li><a href="#speakers" class=" btn-primary">SPEAKERS</a></li>
<li><a href="#sponsors" class=" btn-primary">SPONSORS</a></li>
<li><a href="#team" class="btn-primary">TEAM</a></li>
<li><a href="#venue" class="btn-primary" >VENUE</a></li>
        
      </ul>
    </div>
  </div>
</nav>-->

<!--slider-->
<div id="slide">
<?php include("slider.php");
?>
</div>

<!--registration-->
<div id="register">
<a href="regform.php" class="extra" target="_blank">REGISTER FOR EVENT</a>
</div>

<!--countdown-->
<div class="container-fluid">
<div id="countdown_con">
<div class="col-md-2 col-xs-4"></div>
<div class="row">
<?php
include("countdown_tedx.php");
?>

</div>
</div>
</div>
<br/>
<br/>
<div class="row">
<div id="about" class="col-lg-12 col-md-8 col-sm-6 col-xs-4 text-center">
<h2 id="slogan">ABOUT TEDX</h2>
<br/>
<p class="arrange">&nbsp;&nbsp;TED (Technology, Entertainment, Design) is a non-profit media organization which posts talks online for free distribution, under the slogan 
<br/>
<center><font color="red" style="letter-spacing:1.2px;font-weight:600;font-size:18px;">"IDEAS WORTH SPREADING"</font></center></p>
<p class="arrange">A TEDx event is organized by volunteers from the local community, and just like TED events, it lacks any commercial, religious or political agenda. 
<br/><cite>
<i><b> " Its goal is to spark conversation, connection and community. "</b></i></p></cite>
<i>
<p class="arrange">
At a TED conference, the world's leading thinkers and doers are asked to give the talk of their lives in 18 minutes or less. TED speakers have included Roger Ebert, Sheryl Sandberg, Bill Gates, Elizabeth Gilbert, Benoit Mandelbrot, Philippe Starck, Ngozi Okonjo-Iweala, Brian Greene, Isabel Allende and former UK Prime Minister Gordon Brown.
TED was conceived in 1984 by architect and graphic designer Richard Saul Wurman, who observed a convergence of the fields of technology, entertainment, and design (that is, "TED") The first conference, organized by Harry Marks and Wurman in the same year, featured demos of the compact disc, co-developed by Philips and Sony and one of the first demonstrations of the Apple Macintosh computer.Presentations were given by famous mathematician Benoit Mandelbrot and influential members of the digerati community, like Nicholas Negroponte and Stewart Brand.
</p>
<button class="btn-primary" id="btn">MORE</button>

<br/>
<div id="showit">
<p class="arrange">
On TED.com, talks from TED conferences are shared with the world for free as TED Talks videos. A new TED Talk is posted every weekday. Through the Open Translation Project, TED Talks are subtitled by volunteers worldwide. Through our distribution networks, TED Talks are shared on TV, radio, Netflix and many websites.
</p><p class="arrange">
The TEDx initiative grants free licenses to people around the world to organize TED-style events in their communities with TED Talks and live speakers. Selected talks from these events are also turned into TED Talks videos.
</p><p class="arrange">
The annual TED Prize grants $1 million to an exceptional individual with a wish to change the world. The TED Fellows program helps world-changing innovators from around the globe to become part of the TED community and, with its help, amplify the impact of their remarkable projects and activities. TED-Ed creates short video lessons by pairing master teachers with animators, for use in classroom instruction or independent learning. </i>
</p></div>
</div></div>
<br/>
<br/>






<!--speaker section-->
<div id="speakers">
<div class="container-fluid">
<div class="row">
<div class="col-md-1 col-xs-2"></div>
<div class="col-md-3 col-xs-6">
 
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3><a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>
</div>
 </div>
</div>

<div class="col-md-3 col-xs-4">
 
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3><a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>

</div>
 </div>
</div>

<div class="col-md-3 col-xs-4">
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3> <a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>
</div>
 </div>
</div>

</div>


<div class="row">
<div class="col-md-1 col-xs-2"></div>

<div class="col-md-3 col-xs-4">
 
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3><a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>
</div>
 </div>
</div>

<div class="col-md-3 col-xs-">
 
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3><a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>
</div>
 </div>
</div>

<div class="col-md-3 col-xs-6">
 
 <div class="thumbnail">
<img src="images/speaker2.jpg" alt="Speaker 1"/>
<div class="caption">
<h3><a href="#popup" role="button" data-toggle="modal" data-target="#popup">SPEAKER 1</a></h3>
</div>
 </div>
</div>

</div>
</div>
</div>
</div>
<br/>

<!--sponsors section-->
<div class="jumbotron">
<div id="sponsors">

<div class="container-fluid">
<div class="row">
<div class="col-xs-6 col-md-5">
</div>
<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>

<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>


<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>

</div>

<br/>
<br/>
<div class="row">
<div class="col-xs-2 col-md-1">
</div>
<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>

<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>


<div class="col-xs-4 col-md-2">
<div class="thumbnail">
<img src="images/info.jpg" alt="image can't be  displayed"/>
</div>
</div>

</div>
<br/>
<br/>
<div class="row">
<div class="col-md-5">
</div>
<div class="col-md-4">
<img src="images/become.jpg" alt="image can't be displayed" class="thumbnail"/>
</div>
</div>
</div>
</div>
</div>
<br/>
<br/>
<br/><br/>

<!--TEAM SECTION -->

<div id="team">
<div class="container">
<div class="row"> <h2 class="team-head">TED<sup>x</sup> TEAM</h2></div>
<div class="row">
<div class="col-md-4 col-xs-6">
</div>
<div class="col-md-4 col-xs-8 ">
<img src="images/rajeev.jpg" alt="image not found" class="img-rounded"/>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-1 col-xs-2">
</div>
<div class="col-md-3 col-xs-10">
<img src="images/rajeev.jpg" alt="image not found" class="img-rounded"/>
</div>
<div class="col-md-3 col-xs-10">
</div>
<div class="col-md-3 col-xs-8">
<img src="images/rajeev.jpg" alt="image not found" class="img-rounded "/>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4 col-xs-6">
</div>
<div class="col-md-4 col-xs-8">
<img src="images/rajeev.jpg" alt="image not found" class="img-rounded"/>
</div>
</div>


</div>
</div>


<br/><br/>


<br/>
<div id="venue">
<div class="container">
<div class="row">
<h3 align="center" style="color:#6A0506;text-shadow:2px 2px 2px white;font-weight:600;" class="animated rollIn"> VENUE</h3></div>
</div>
<br/>
<center>MP HALL
<br/>
MNNIT ALLAHABAD
</center>
</div>
</br>

<div id="back-top"><a href="#top"><img src="images/up.jpg" class="aa"></a></div>
<div id="footer" class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
<div id="footer-content">
<div id="subfoot1">
<h2 class="head">CONTACT US</h2>
<a style="color:grey">info@tedxmnnit.com</a>
<h3>PRESS AREA</h3>
Information for Press</div>
<div id="foot2">
<h2 class="head">CONNECT WITH<br/>
&nbsp;&nbsp;<font color="#1b0a0a" style="text-shadow:1.2px 1.2px 3px whitesmoke">TEDX MNNIT</font></h2>
<div class="set">

<a href="https://www.facebook.com/TEDxMNNIT/"><img src="images/facebook.png"/></a></div>
<div class="set">
<img src="images/twitter.png"/></div>
<div class="set">
<img src="images/linkedin.png"/></div></div>
<div id="foot3">
<h2 class="head">SPONSORS</h2>
<div class="row">
Thanks for our sponsors and team Partners</div>
</div>
</div>
</div>
<br/>
<br/>
<div id="end">
<center>Copyrights@tedx.mnnit.in</center>
</center>
</div>


<div class="container">
    <div class="row">
      <div class="col-xs-10">
  
         <div class="modal fade" id="popup" tabindex="-1" data-keyword="false" data-backdrop="static">
            <div class="modal-dialog ">
                <div class="modal-content">
                  <div class="modal-header">
                   <h2 align="center" id="set" style="margin:0px;">NAME</h2>
                 <img src="images/Entypo_232b(1)_32.png" id="popup" class="close" data-dismiss="modal"/>
                  </div>
                   <div class="modal-body">
                  
                  
                  <div id="content">


<div id="parra">
<p>
“A day can never be too long but is in general too short.” This self-made quote at least counts for this man. Dhairya Dand is an award winning researcher, engineer and designer based in NYC and Seattle where he runs oDD - a futurist factory X lab. His current work investigates the human body as a medium for computation, new materials as a tool to embody interactions and design as a vehicle for mindfulness. Dhairya likes to investigate and observe his environment, which makes him generate quite unusual ideas. Those ideas result in impressive inventions and possibilities which include bio reactive architecture, elastic computer screens, shape changing gadgets, shoes that tickle and guide, alcohol aware ice cubes, synthetic muscles, programmable hair… to be continued. He previously was a researcher at MIT Media Lab, amateur geologist in Saudi, toy designer in Singapore, sensory researcher in Tokyo, political activist in Bombay, student at MIT and Harvard.
</p>
</div>
<div id="additional">
<center>
<a href="">Watch YouTube Videos</a>
</center>
</div>
</div>
                   </div>
                  </div>
             </div>
          </div>
       </div>
    </div>
</div>












<!--<div class="modal fade" tabindex="-1" id="popup" data-keyboard="false" data-backdrop="static">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="close" id="btnhide" >&times;</button>
           <h3 class="modal-title">SPEAKER 1</h3>
           </div>
           
            <div class="modal-body">
                 <div id="parra">
<p>
“A day can never be too long but is in general too short.” This self-made quote at least counts for this man. Dhairya Dand is an award winning researcher, engineer and designer based in NYC and Seattle where he runs oDD - a futurist factory X lab. His current work investigates the human body as a medium for computation, new materials as a tool to embody interactions and design as a vehicle for mindfulness. Dhairya likes to investigate and observe his environment, which makes him generate quite unusual ideas. Those ideas result in impressive inventions and possibilities which include bio reactive architecture, elastic computer screens, shape changing gadgets, shoes that tickle and guide, alcohol aware ice cubes, synthetic muscles, programmable hair… to be continued. He previously was a researcher at MIT Media Lab, amateur geologist in Saudi, toy designer in Singapore, sensory researcher in Tokyo, political activist in Bombay, student at MIT and Harvard.
</p>
</div>  
            
            </div>
            <div id="additional">
<center><h3> TO KNOW MORE</h3>
<a href="">Watch YouTube Videos</a>
</center>

           </div>
        </div>
     </div>
   </div>
     <script>
     $(document).ready(function() {
        $('#btnshow').click(function(){
			$('#popup').modal('show');
		});
  
        $('#btnhide').click(function(){
			$('#popup').modal('hide');
		});
		
		
    });
     
     
     </script>
     
-->     


</body>
</html>