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

foreach	($_POST['questions'] as $question) {
 
  
  $a = $question['answer'];
  $b = $question['question'];
  $c = $question['answer_a'];
  $d = $question['answer_b'];
  $e = $question['answer_c'];
  $f = $question['answer_d'];
  
 $insert1 = "INSERT INTO teacher (question, answer, answer_a, answer_b ,answer_c ,answer_d) " . 
			"VALUES ('$b','$a','$c','$d','$e','$f' )";
 
 
	$result1 = mysql_query($insert1)
	or die (mysql_error());
 	
}

?>
<form action="uli.html" method="POST" id="text">

	Your test is generated, your unique id for the test is : 
	<br><br>
	

</form>
<div style="margin:0 auto" align=center>
<input type="submit" name="submit" value="Ready">
</div>
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