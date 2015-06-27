<head>
<!--Bootstrap Start -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--Bootstrap end-->
</head>
<?php
	//Stop all sessions
	session_unset();
?>

<?php
// define variables and set to empty values
$nameErr = $passErr = $sexErr = $cityErr = "";
$name1 = $pass1 = $sex1 = $city1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST['user'])) {
     $nameErr = "Name is required";
   } else {
     $name1 = test_input($_POST['user']);
   }
   
   if (empty($_POST['pass'])) {
     $passErr = "Password is required";
   } else {
     $pass1 = test_input($_POST['pass']);
   }
   
   if (!isset($_POST['sex'])) {
		$sexErr = "Sex is required";
	 } else {
     $sex1 = test_input($_POST['sex']);
   }
			
  

  if (empty($_POST['city'])) {
     $cityErr = "City is required";
   } else {
     $city1 = test_input($_POST['city']);
   }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<!--<form method="post" action="<?php 
if (empty($_POST["user"]) or empty($_POST["pass"]) or !isset($_POST["sex"]) or empty($_POST["city"])) 
{
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
} else echo "session.php";
?>">
	 	<p id="user" >
			Enter your username :
			<input type="text" name="user" maxlength = "7" value="<?php echo $name1;?>">
			<span class="error"><?php echo $nameErr;?></span>
		</p>
		<p id="pass">
			Enter your password :
			<input type="password" name="pass" maxlength = "10" value="<?php echo $pass1;?>">
			<span class="error"><?php echo $passErr;?></span>
		</p>
   
		<p id="sex">
			Chooose your sex : 			
			<input type="radio" name="sex" value="<?php echo sex1;?>Man"> Man
			<input type="radio" name="sex" value="<?php echo sex1;?>Woman"> Woman 
			<span class="error"><?php echo $sexErr;?></span>
		</p>
				
		<p id="city">
			Enter your city :
			<input type="text" name="city" maxlength = "15" value="<?php echo $city1;?>">
			<span class="error"><?php echo $cityErr;?></span>
		</p>
   
   
   <p id="submit" >
		<input type="submit" name="submit" value="Submit"> 
   </p>
</form>-->
<form class="form-horizontal" action="<?php 
if (empty($_POST["user"]) or empty($_POST["pass"]) or !isset($_POST["sex"]) or empty($_POST["city"])) 
{
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
} else echo "session.php";
?>">
  <div class="form-group">
	<div class="col-sm-3"></div>
    <font color="white"><label for="id1" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-4">
      <input type="text" name="user" maxlength = "7" class="form-control" id="id1" value="<?php echo $name1;?>" placeholder="Username">
	  <span class="error"><?php echo $nameErr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div>
	<div class="form-group">
	<div class="col-sm-3"></div>
    <label for="id2" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="pass" maxlength="10" value="<?php echo $pass1;?>" id="id2" placeholder="Password">
      <span class="error"><?php echo $passErr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div></font>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<style>
body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	.jfott {
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
	#user {
		position: absolute;
		top: 275px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
	}
	#pass {
		position: absolute;
		top: 315px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#sex {
		position: absolute;
		top: 350px;
		left: 722px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#city {
		position: absolute;
		top: 380px;
		left: 745px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#submit {
		position: absolute;
		top: 420px;
		left: 880px;
		font-size: 125%;
		color: #FFFFFF;
	}
		
	</style>
	<div class="jfott"><p><font color= "#FFFFFF">Copyright© Open Text Corporation. All Rights Reserved.</font></p></div>
