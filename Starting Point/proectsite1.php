
<html>

<head>

<style>
	
	#id0{
	 color : #5CB8E6;
	 font-size: 75px;
	 font-style: italic;
	 text-align: center;
	 top: 150px;

	}
   #id1{
		
		font-size: 20px;
		padding-right: 40px;
		padding-top: 20px;
		padding-left: 25px;
		padding-bottom: 20px;
		border: 5px solid black ;
		color:white;
		position: absolute;
		left: 825px;
		top:315px;
		text-align: left;
   }
   
   #id2{
		font-size: 20px;
		padding-right: 35px;
		padding-top: 20px;
		padding-left: 25px;
		padding-bottom: 20px;
		position: absolute ;
		left: 970px;
		top: 315px;
		border: 5px solid black ;
		color:white;
		text-align: right;
   
   }
   #id7{
	position: absolute;
	left: 850px;
   
   }
	a {
	text-decoration: none;
	}
	audio{
		position: absolute;
		top: 400px;
		left : 1000px;
		
	}	
	#id3{
		font-size: 15px;
		color: red;
		position: absolute;
		top: 195px;
		left : 920px;
		text-align: center;
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
	body {
	background-size : 100%;
	background: url("2.jpg") no-repeat center center fixed ; 
	background-size: cover;
	}
	audio{
		position: absolute;
		top: 500px;
		left : 816px;
	}
	
</style>
<title>
	Welcome
</title>
</head>
<body>


 <h1 id = "id0">Welcome to our site</h1>

<?php include "headerproekt.php"; ?>
 <center><a href = "proect_login.php"><h6 id = "id1">Login</h6></a></center>
 <center><a href = "proektlogin.php"><h6 id = "id2">Sign in</h6></a></center>

 <p>
	<a href="http://78.83.53.57/proektlogin.php">
	<img id = "id7" src="snimka.jpg" >
	</a>
 </p>
<h6 id = "id3"><b>Visit our site :</b><h6>

 </body>
	<audio src="mans.mp3" controls autoplay loop>
</audio>
<div class="jfott"><p><font color= "#FFFFFF">Copyright© Open Text Corporation. All Rights Reserved.</font></p></div>
</html>

