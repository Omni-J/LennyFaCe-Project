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
<?php
$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid2 = $_POST['lastid1'];
	if(isset($_POST['submit']))
	{
	$rand_id = 1;
	$inserttest = "INSERT INTO tests (teacher_id) " . 
			"VALUES (1)";
	mysql_query($inserttest);
	
	$testid = mysql_insert_id();		
	
foreach	($_POST['questions'] as $question) {
 
  
  $a = $question['answer'];
  $b = $question['question'];
  $c = $question['answer_a'];
  $d = $question['answer_b'];
  $e = $question['answer_c'];
  $f = $question['answer_d'];
  
  
 $insert1 = "INSERT INTO questions (test_id,question, answer, answer_a, answer_b ,answer_c ,answer_d) " . 
			"VALUES ('$testid','$b','$a','$c','$d','$e','$f' )";
 
 
	$result1 = mysql_query($insert1)
	or die (mysql_error());
 	
}
}

	
	




?>
<form action="uli.html" method="POST" >
	<font color="white" id="text">	
	<div>
	Your test is generated, your unique id for the test is : 
	</div>
	</font>
	<br><br>
	<div class="col-sm-12 text-center">
	<input class="btn btn-default" name="submit" type="submit" value="Ready">
	</div>

</form>

<body>
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
	 	text-align: center;
		font-size: 1.875em;
		/* <-- tva gornoto go gledah ot W3schools --> */
	}
	#button{
		color:black;
		background-color:white;
		border-color:white;
		margin-top: 0;
		border-bottom:0;
		text-align: center;
		float:center;
	}
</style>
</body>
</html>
