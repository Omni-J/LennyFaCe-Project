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
		margin-top: 5%;
		margin-bottom:4%;
		margin-left:auto;
		margin-right:auto;
		padding:4%;
	}
</style>
</head>
<body>
<div class="container">
<div class="jumbotron text-left">
<form action="betatest.php" method="POST">
Type your id :
<input type="text" name="lastid">
<br><br>
Type number of question :
<input 
type="text" name="broi" >
<br><br>
<input type="submit" name="submit" value="Make test">
</form>
</div>
</div>
</body>
