<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="tedx.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7-dist/jquery.validate.js"></script>
        <script src="participate.js"></script>
<style>
body
{

	background: linear-gradient(lightgrey,white,lightgrey,white) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}
fieldset
{
margin:20px auto;
padding:2px;
}
legend
{
	display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 25px;
    font-size: 22px;
    line-height: 37px;
    border: 0;
    border-top-color: blanchedalmond;
    border-bottom: 2px outset #150303;
   
	text-align: center;
    font-stretch: extra-expanded;
    color: #69292f;
    text-shadow: 2px 1px 3px grey;
	}
	.btn-default
	{
		color: whitesmoke;
    background-color: #4a1111;
    border-color: #2d0d17;
    text-shadow: 0.2px 1.2px;
    letter-spacing: 1.2px;
	}
	
	label
	{
		color:#652626;
		font-size:15px;
	}
	#terms
	{
		font-weight:600;
	}
	label::after
	{
		content: *;
		display:inline-block;
		color:red;
	}
	.btn-link 
	{
		color:#652626;
		font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
        font-weight:700;
		letter-spacing:1.2px;
		border:1px inset brown;
		border-radius:5px;
	}
	.btn-link:hover
	{
	
		font-size:18px;
		text-decoration:none;
	}
	.section-form
	{
		margin:0 auto;
	}
		fieldset
	{
		margin:10px;
	  padding:10px;
	     width:auto;
  border:2px outset grey;
	  box-shadow:5px 1px 1px #150C0C;	
	}
		.form-horizontal .form-group {
    margin-right: 10px;
    margin-left: 9px;
	margin-bottom:10px;
}
select
{
	    padding: 3px;
    height: 30px;
    min-width: 40px;
    color: brown;
	border-radius:5px;
}
a:hover
{
	color:black;}

    </style>
</head>
<body>
<!--
<div id="header">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="animated bounceInDown" id="icon">
<h1 class="shake">TED<sup>x</sup> MNNIT
</h1>
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
</div>-->


<div class="section-form">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
</div>
<div class="col-md-5 col-sm-8">
<fieldset>
<form action="submit.php" method="post" class="form-vertical" id="regform" name="regform" >

<legend>
PARTICIPATE
</legend>
<div class="form-group">
<label for="username" class="control-label">FULL NAME</label>
<input class="form-control" placeholder="Enter your full name" type="text" id="username" required/>
</div>
<div class="form-group">
<label class="col-sm-4">GENDER</label>
<label class="radio-inline">
<input type="radio" name="gender" value="male"/>MALE
</label>
<label class="radio-inline">
<input type="radio" name="gender" value="female"/>FEMALE
</label>
</div>

<div class="form-group">
<div class="col-sm-3">
<label class="control-label">CITY</label></div>
<div class="col-sm-3"></div>
<select id="city">
<option value="city name">City Name</option>

</select>
</div>

<div class="form-group">
<div class="col-sm-3">
<label class="control-label">COLLEGE</label></div>
<div class="col-sm-3"></div>
<select id="country">
&nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;<option value="city name">College Name</option>
</select>
</div>
<div class="form-group">
<label for="contact" class="control-label">CONTACT</label>
<input class="form-control" placeholder="Enter your contact No." type="number" id="contact" required/>
</div>

<div class="form-group">
<label for="mail" class="control-label">EMAIL</label>
<input class="form-control" placeholder="Enter your email" type="email" id="email" required/>
</div>

<div class="form-group">
<label for="password" class="control-label">PASSWORD</label>
<input class="form-control" placeholder="Enter your password" type="password" id="password" required/>
<!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>
<span class="help-block">Strong Password</span>-->
</div>

<div class="form-group">
<label for="cpassword" class="control-label">CONFIRM PASSWORD</label>
<input class="form-control" placeholder="Confirm your password" type="password" id="cpassword" required/>
</div>

<span id="errmsg"></span>

<div class="form-group">
<div class="col-sm-1">
<input type="checkbox"/></div><span id="terms">By clicking on submit you agree to our terms and conditions</span>
</div>
<center><button type="submit" class="btn btn-default" id="submit-button">REGISTER</button></center>
<br/>
<center>
<p><b><font color="#681E1F">Already Registered? &nbsp; &nbsp; </font></b><button class="btn btn-link"><a href="login.php">LOGIN</a></button></p></center>
</fieldset>
</form>
</div>
</div>
</div></div>
</body>
</html>