<html>
<head>
	<meta charset="utf-8">
	<title>LennyFaCe</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap Start -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- BS library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!--Bootstrap end-->
<style>
	.jumbotron {
		border-style:solid;
		border-width: 3px;
		width:85%;
		margin-top: 3%;
		margin-bottom:4%;
		margin-left:auto;
		margin-right:auto;
		padding:3%;
	}
	#img {
		margin-top:2%;
		margin-bottom:0;
		text-align:center;
	}
	body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
</style>
</head>
<body>
<div id="img">
	<img src="rsz_lennyface.jpg">
</div>
<div class="container">
<div class="jumbotron text-left">
<form action="betatest.php" method="POST">

<br><br>
TYPE NUMBER OF QUESTION :
<input type="text" name="broi" >
<br><br>
<input type="submit" name="submit" value="Make test" class="btn btn-primary">
</form>
</div>
</div>
</body>
</html>