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
	#lenny{
	margin-top:2%;
	}
</style>
</head>
<body>
<div class="col-sm-12 text-center" id="lenny"><img src="rsz_lennyface.jpg"></div>
<div class="container">
<div class="jumbotron text-left">
<form method="POST" action="finishtest.php">
<?php
 $connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	
	$testid = $_POST['unique'];
	$studentid = $_POST['unique1'];
	
	$select = "SELECT * FROM questions " .
				"WHERE test_id = $testid";
				
	$result = mysql_query($select)
	or die (mysql_error());
	$i = 1;
	while ($row = mysql_fetch_array($result))
		{
		
		extract($row);
		
		$ti=<<<EOD

		
		
$i
$question

<div class="radio">
  <label>
    <input type="radio" name="questions[$id][answer]" id="optionsRadios1" value="a">
    a
	$answer_a
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="questions[$id][answer]" id="optionsRadios2" value="b">
    b
	$answer_b
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="questions[$id][answer]" id="optionsRadios3" value="c">
    c
	$answer_c
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="questions[$id][answer]" id="optionsRadios4" value="d">
    d
	$answer_d
  </label>
</div>

EOD;
echo $ti;
$i++;		
}


?>
<input type="hidden" name="teacherid" value="<?php echo $test_id;?>">
<input type="hidden" name="studentid" value="<?php echo $studentid;?>">
<div class="col-sm-12 text-center">
<input class="btn btn-primary" name="submit" type="submit" value="Finish Test">
</div>
</div>
</div>
</form>
</body>
