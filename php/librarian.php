<?php
$con=mysql_connect("localhost","root","") or die("connection failed");
$db = mysql_select_db("library",$con) or die("couldnot connect to database");

mysql_select_db("library",$con);
if(isset($_POST['member']))
{header('location:member.php');
exit();}
else if(isset($_POST['book']))
{header('location:book.php');
exit();}


echo "<form method='post'>
<input type='submit' name='member' value='Member Details'>
<br/><br/>
<input type='submit' name='book' value='Book Details'>
</form>";
?>