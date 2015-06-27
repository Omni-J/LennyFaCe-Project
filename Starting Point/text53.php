<?php

$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('textarea');
 
if (isset($_POST['submit'])){
    if ($comment){
        $Insert = "INSERT INTO area (Text) " .
					"VALUES ('$comment')" ;
					
	
			
					
		$results = mysql_query($Insert)
		or die (mysql_error());	
		
		header('Location:safe53.php');
    }
    
}

?>




<form action="text53.php" method="POST">
<table>
<tr><td colspan="2" > The Program : </td> </tr>
<tr><td colspan="2" ><textarea name="comment" rows="20" cols="50"> </textarea> </td> </tr>
<tr><td colspan="2" ><input type="submit" name="submit" value="Upload" /></td></tr>
</table>
</form>
