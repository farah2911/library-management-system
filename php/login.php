<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="../jquery plugins/jquery.js"> </script>
<script type="text/javascript" src="../jquery plugins/slider.js"> </script>
<script type="text/javascript" src="../jquery plugins/jquery-1.4.1.min.js"> </script>
<script type="text/javascript" src="../jquery plugins/jquery-2.1.1.min.js"> </script>
<title>sample</title>
<style> 
	*{
		margin:0px;
		padding:0px;
	
	}
	body{
		background-color:#CDAA7D;
	}
	#menuBar{
		background-color:#8B7355;
		position:relative;
		margin-left:auto;
		margin-right:auto;
		width: 1300px;
		height:50px;
		top:0px;
		left:0px;}
	ul{
		list-style:none;}
	ul li{
		top: 100px;
		float:left;
		width:250px;
		margin-top:20px;
		border-left: solid 4px #EED5B7;
		
		}
	a{
		font-family:"Courier New", Courier, monospace;
		font-size:18px;
		text-decoration:none;
		font-weight:500;
		color:white;
		}
		a:hover{
			background-color:rgb(240,128,128);
			color: white;}
	
	#header{
		background-color:#FFFFFF;
		position:relative;
		margin-left:auto;
		margin-right:auto;
		width:1300px;
		height:400px;
		top:10px;
		}
	#image{
		background-color:#FFFFFF;
		position:relative;
		margin-left:auto;
		margin-right:auto;
		margin-top:10px;
		width:1100px;
		height:300px;
		top:10px;
		}
	
	
	#slide{
		position: absolute;
		margin-left:auto;
		margin-right:auto;
		width:1200px;
		margin-top:5px;
		margin-bottom:5px;
		top:150px;
		left:400px;
	height:50px;}
	p{

		position: absolute;
		margin-left:auto;
		margin-right:auto;
		top:150px;
		left:75px;
		font-family:"Courier New", Courier, monospace;
		color: white;
		font-size:29px;
		font-weight:600;
		top:150px;
		text-allign:centre;
	}
	span {
		font-family:"Courier New", Courier, monospace;
		color:red;
		font-size:50px;
		font-weight:900;
		text-allign:centre;
	}
		
	#loginform{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		top:30px;
		width: 600px;
		height: 200px;
		<!---background-color:#DEB887;-->
		border: dashed 5px #EEC591;
		left:400px;
	}
	form input {
		position:relative;
		margin-top:5px;
		margin-bottom:5px;
		left:30px;
		height:20px
		padding-top:2px;
	
	}
	#memberLogin{

		position: absolute;
		margin-left:auto;
		margin-right:auto;
		top:400px;
		left:800px;
		<!--background-color:#DEB887;-->
		font-family:"Courier New", Courier, monospace;
		color: white;
		font-size:50px;
		font-weight:900;
		text-allign:centre;
	}
	#box{
		position:relative;
		margin-left:5px;
		margin-right:auto;
		height: 20px;
		font-family:"Courier New", Courier, monospace;
		color: white;
		font-size:30px;
		font-weight:400;
		<!--background-color:#DEB887;--->
		top:-180px;
		left:0px;
	}
	form input #s{
		position:relative;
		margin-top:5px;
		margin-bottom:5px;
		left:30px;
	
	}
	#form2{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		top:0px;
		width: 300px;
		height: 10px;
		background-color: rgb(139,35,35);
		left:0px;
	}
	#note{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		width: 1300px;
		height: 150px;
		left:0px;
		background-color: #8B7355;
		top:30px;
	}
	h1{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		font-family:"Courier New", Courier, monospace;
		font-size:30px;
		color: white;
		left:20px;
		font-weight:900;
	}
	#p1{

		position: absolute;
		margin-left:auto;
		margin-right:auto;
		top:30px;
		left:10px;
		font-family:"Courier New", Courier, monospace;
		color: white;
		font-size:15px;
		font-weight:600;
	
		text-allign:centre;
	}
	#lib{
		position: absolute;
		margin-left:auto;
		margin-right:auto;
		width:1200px;
		margin-top:5px;
		margin-bottom:5px;
		top:150px;
		left:400px;
	height:50px;}
	
	#libQuote{

		position:relative;
		background-color:black;
		opacity:0.76;
		left:-780px;
		width:350px;
		font-family:"Courier New", Courier, monospace;
		color:white;
		font-size:36px;
		font-weight:600;
	
		text-allign:centre;
	}
</style>
</head>
<body> 
<div id="menuBar">
	<ul> 
				<li> <a href="index.php"> Home </a> </li>
				<li> <a href="#"> Faculty </a> </li>
				<li> <a href="home.php">Login </a> </li>
				<li> <a href="book.php">Resources</a>  </li>
				<li> <a href="book.php"> Book Search</a> </li>
			</ul>
 </div>
<div id="header"> <img src="../images/h13.jpg" height=700px, width=1300px/></div>
<div id="lib">
<p id="libQuote">That perfect tranquillity of life, which is nowhere to be found but
 in retreat, a faithful friend and a good <span>library</span>.</p>
 </div>


</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die("connection failed");
$db = mysql_select_db("library",$con) or die("could not connect to database");
if(isset($_POST['id']))
{$id=$_POST['id'];
$pwd=$_POST['pwd'];
if(mysql_query("SELECT * FROM librarian where librarianId='$id' and password='$pwd'"))
{header('location:librarian.php');
exit();
}
else
{
echo "incorrect Id and Password";
exit();
}
}
else if(isset($_POST['bsearch']))
{
header('location:bookdisplay.php');
exit(); }
echo "<p id='memberLogin'> Member Login</p>
<div id='loginform'>
	<div id='box'><form method='post'>
	User Id:<input type='text' name='id'><br/>
	Password:  <input type='password' name='pwd'>
	<form method='POST' action='memberFinal.php'> <input type='submit' value='login'> </form>
	</div>
	</form>
</div>";
?>
