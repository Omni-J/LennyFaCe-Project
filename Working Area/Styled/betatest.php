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
	body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#Lenny{
		margin-top: 2%;
		border-bottom:0;
		text-align: center;
	}
</style>
</head>
<body>
<div id="lenny">
<img src="rsz_lennyface.jpg">
</div>
<div class="container">
<div class="jumbotron text-left">
<form method="POST" action="testready.php" class="form-horizontal">
<?php
 $connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid1 = $_POST['lastid'];
$count = 1;
foreach (range(1, $_POST['broi']) as $i) {
	$az=<<<az
Type question : $i
<input type="text" name="questions[$i][question]">

	
Type answer and check true word of question $i:
<div class="col-sm-4"></div> 
<div class="col-sm-12 text-left">
<input type="radio" name="questions[$i][answer]" value="a">A
<input class="form-control" type="text" name="questions[$i][answer_a]" >
<input type="radio" name="questions[$i][answer]" value="b">B
<input class="form-control" type="text" name="questions[$i][answer_b]" >
<input type="radio" name="questions[$i][answer]" value="c">C
<input class="form-control" type="text" name="questions[$i][answer_c]">
<input type="radio" name="questions[$i][answer]" value="d">D
<input class="form-control" type="text" name="questions[$i][answer_d]">
</div>
<div class="col-sm-12"></div>
az;
echo $az;
}



?>
<input type="hidden" name="lastid1" value="<?php echo $lastid1 ;?>">
<div class="text-center">
<input type="submit" name="submit" value="Ready" class="btn btn-primary">
</div>
</div>
</div>
</body>
</form>
</html>
