<?php
	
	// This variables $_SESSION take the write information from reg form 
	session_start();
	$_SESSION['username'] = $_POST['user'];
	$_SESSION['userpass'] = $_POST['pass'];
	$_SESSION['usersex'] = $_POST['sex'];
	$_SESSION['usercity'] = $_POST['city'];
	// cant take $_SESSION variable in INSERT tag, but normaly variables can 
	$name = $_SESSION['username'];
	$pass = $_SESSION['userpass'];
	$sex = $_SESSION['usersex'];
	$city = $_SESSION['usercity'];
	if($_SESSION['username'])
	{
		$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("proect");		
		//bool define ( string Name , mixed $value [, bool $case_insensitive = false ] )
		$select = "SELECT Name " .
					"FROM Sign " .
					"WHERE Name = '$name'";
		
		$results = mysql_query($select);
		
		
		
		if ($row = mysql_fetch_array($results)) 
		{
			//extract($row);
			include "reload2_reg.php";
		} else {
		//need to read database for tell what is reg just!!!***
		$Sign = "INSERT INTO Sign (Name,Password,Sex,City) " .
					"VALUES ('$name', '$pass', '$sex', '$city')" ;
					
	
			
		//Show the data in basadate(mysql)			
		$results = mysql_query($Sign);
		include "ahref.php";
		
		}
	}
	exit();
	
?>
