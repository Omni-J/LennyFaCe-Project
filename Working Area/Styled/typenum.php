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
</head>
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
<body>
<div id="lenny">
<img src="rsz_lennyface.jpg">
</div>

<?php

	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$i = 1;
	$teacherid2 = $_POST['teacherid1'];
	$studentid2 = $_POST['studentid1'];
	$select = "SELECT * FROM questions " .
				"WHERE test_id = $teacherid2";
				
	$result = mysql_query($select)
	or die (mysql_error());
	
	$select1 = "SELECT * FROM student " .
				"WHERE user_id = $studentid2";
				
	$result1 = mysql_query($select1)
	or die (mysql_error());
	
	while($rows1 = mysql_fetch_assoc($result) and $rows2 = mysql_fetch_assoc($result1))
	{
		extract($rows1);
		extract($rows2);
		
		if($answer == $answer1)
		{
			echo "$i - yes";
		} else echo "$i - no - '$answer'";
		echo "<br>";
		$i++;
	}
	
?>
</body>
</html>
