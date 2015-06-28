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
	body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#text{
		margin-top: 0;
		border-bottom:0;
		color:#ffffff;
		font-style: italic;
		font-size: 1.875em;
	}	
	
</style>
</head>
<body>
<?php
$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');

	$teacherid1 = $_POST['teacherid'];
	$studentid1 = $_POST['studentid'];
	
foreach ($_POST['questions'] as $question) {
 
  
  $b = $question['answer'];
  
	$insert2 = "INSERT INTO student (user_id,answer1) " . 
			"VALUES ('$studentid1', '$b')";
 
 
	$result2 = mysql_query($insert2)
	or die (mysql_error());
 	
}



	
	




?>
<form action="typenum.php" class="col-sm-12 text-center" method="POST" >
	<font color="white" id="text">	
	<div>
	Your test is ready, thank you :)
	</div>
	</font>
	<br><br>
	<div>
	<button type="submit" name="submit" class="btn btn-primary" value="Ready">Ready</button>
	</div>
	<input type="hidden" name="teacherid1" value="<?php echo $teacherid1 ;?>">
	<input type="hidden" name="studentid1" value="<?php echo $studentid1 ;?>">
</form>
</body>
</html>
