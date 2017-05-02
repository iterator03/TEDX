<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEDX LOGIN</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"/>
<script src="bootstrap-3.3.7-dist/jquery-1.12.0.min.js"></script>
        
  <style>
  body
{

	background: linear-gradient(lightgrey,white,lightgrey,white) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}  .form-group{
	text-align:center;
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
  
  fieldset
  { margin:10px;
	  padding:10px;
	     width:120%;
  border:2px outset grey;
  margin-top:20%;
	  box-shadow:2px 2px 2px black;	  }
	  .form-horizontal .form-group {
    margin-right: 10px;
    margin-left: 9px;
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
    border-bottom: 2px inset #150303;
    box-shadow: -2px 2px 0.5px grey;
	text-align: center;
    font-stretch: extra-expanded;
    color: #69292f;
    text-shadow: 2px 1px 3px grey;
}
a
{
	color:#110808;}
  </style>
        
</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-4 col-sm-8">
</div>
<div class="col-lg-4 col-sm-8">
<fieldset>
<form action="l_handler.php" method="post" class="form-horizontal" id="regform" >

<legend>
LOGIN
</legend>



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
<a href="reset.php">Forgot your password?</a>
<br/>
<center><button type="submit" class="btn btn-default">LOGIN</button></center>
<br/>

</fieldset>
</form>
</div>
</div>
</div></div>






</body>
</html>