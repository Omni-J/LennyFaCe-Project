<div align="center">
<?php
$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('textarea');
$select = "SELECT * " .
					"FROM area " .
					"WhERE Sign_id = 53";
		
		$results = mysql_query($select)
		or die (mysql_error());	
		

	while($rows = mysql_fetch_assoc($results))
	{
		extract($rows);
		echo $Text;
		echo "<br>";
	}
//DA GO NAUCHAAAAAA TOZI STYLE DESIGN !
?>
</div>
<head>
<style>
	div{
		float: none;
		font-family: Consolas, 'Liberation Mono', Menlo, Courier, monospace;//
		font-kerning: auto;
		font-size: 12px;
		tab-size: 8;
		text-align: start;
		white-space: pre;
	}

</style>
</head>
<form action=" text53.php " method = "POST">
<input type="submit" name="submit" value="Upload">
</form>