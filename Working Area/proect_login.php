<?php
	//take the variables from file where we have session_start tag
	session_unset();
?>
<?php
// define variables and set to empty values
$nameerr = $passerr = "";
$name2 = $pass2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST['user'])) {
     $nameerr = "Name is required";
   } else {
     $name2 = test_input($_POST['user']);
   }
   
   if (empty($_POST['pass'])) {
     $passerr = "Password is required";
   } else {
     $pass2 = test_input($_POST['pass']);
   }
}   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<?php include "headerproekt.php"?>
<form method="post" action="<?php 
if (empty($_POST["user"]) or empty($_POST["pass"]))
{
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
} else echo "loginproect.php";
?>">
		
	
			<p id = "id1">
				Enter your username :
				<input type = "text" name = "user" maxlength = "7" value ="<?php echo $name2;?>" >
				<span class="error"><?php echo $nameerr;?></span>
			</p>
			<p  id = "id2">
				Enter your password :
				<input type = "password" name = "pass" maxlength = "10" value ="<?php echo $pass2;?>">
				<span class="error"><?php echo $passerr;?></span>
			</p>
			<p  id = "id3">
				<input type  = "submit" name = "Submit" value = "Submit">
			</p>
</form>
<style>
	#id1 {
		position: absolute;
		top: 285px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
	}
	#id2 {
		position: absolute;
		top: 325px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
	}
	#id3 {
		position: absolute;
		top: 360px;
		left: 850px;
		font-size: 150%;
		color: #FFFFFF;
	}
	body {
		background-size : 100%;
		background: url("image1.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#id9{
            width: 60%;
            bottom: 0;
			float: left;
            position: absolute;
			background-color: #000000 ;
			font-weight: bold;
			border-color: #eee;
			border-left-style: solid;
			border-right-style: solid;
			border-top-style: solid;
			margin-left: 20%;
			margin-right: 20%;
			text-align: center;
        }
	</style>
	
		<div id = "id9" class="jfott"><p><font color= "#FFFFFF">Copyright© Open Text Corporation. All Rights Reserved.</font></p></div>
