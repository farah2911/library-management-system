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
		margin-top:10px;
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
		top:0px;
		}
	#image{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		margin-top:10px;
		width:1300px;
		height:600px;
		top:-20px;
		}
	#bookQuote{

		position:relative;
		margin-left:auto;
		margin-right:auto;
		top:-70px;
		left:-100px;
		width:150px;
		font-family:"Courier New", Courier, monospace;
		color: black;
		font-size:28px;
		font-weight:600;
	
		text-allign:centre;
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
		
	#form{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		top:-120px;
		width: 360px;
		height: 150px;
		background-color: rgb(139,35,35);
		left:420px;
	}
	form input {
		position:relative;
		margin-top:5px;
		margin-bottom:5px;
		left:30px;
		padding-top:2px;
	
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
	.bookForm{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		top:-350px;
		width: 500px;
		height: 50px;
		left:-350px;
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
	table {
		position:relative;
		margin-left:auto;
		margin-right:auto;
		left:100px;
		top:100px;
	}
	#title{
		position:relative;
		margin-left:auto;
		margin-right:auto;
		width: 600px;
		height: 150px;
		left:-300px;
		top:-400px;
	}
	#lookUp{
		position:relative;
		font-family:"Courier New", Courier, monospace;
		color:black;
		font-size:40px;
		top:120px;
		left:-10px;
		font-weight:900;

	}
</style>
</head>
<body> 
<div id="menuBar">
	<ul> 
				<li> <a href="index.php"> Home </a> </li>
				<li> <a href="#"> Faculty </a> </li>
				<li> <a href="#">Login </a> </li>
				<li> <a href="book.php">Resources</a>  </li>
				<li> <a href="book.php"> Book Search</a> </li>
			</ul>
 </div>
<div id="header">
 <img id="image" src="../images/h14.jpg" height=600px, width=1200px/>
</div> 
<div id="slide">
<p id="bookQuote"> Keep reading <span>books</span>,but remember that a <span>book</span>
is only a <span>book</span>,and you should learn to think for yourself. </p>
</div>
<div id="title"> <p id="lookUp"> Look Up For <span>Books</span> Here. </p></div>
</body>
</html>


<?php
$con=mysql_connect("localhost","root","") or die("connection failed");
$db = mysql_select_db("library",$con) or die("couldnot connect to database");


  if(isset($_POST['title']))
{
	$title=$_POST['title'];
	$query=mysql_query("SELECT * FROM books WHERE title LIKE '%$title%'");
	echo "<table border='2' style:'border:5px solid black'>
			<thead> 
				<th> Acc No.</th>
				<th> Title</th>
				<th> Author</th>
				<th> Edition</th>
				<th> Status</th>
				<th> Type</th>
			</thead>";
			while($record=mysql_fetch_array($query))
				{
					$accNo=$record['accNo'];
					$title=$record['title'];
					$author=$record['author'];
					$edition=$record['edition'];
					$status=$record['status'];
					$type=$record['type'];
					echo "<tr>";
					echo "<td>".$accNo."</td>";
					echo "<td>".$title."</td>";
					echo "<td>".$author."</td>";
					echo "<td>".$edition."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$status."</td>";
				}//while ends
			echo "</tr></table>";
	if(!$query)
		echo"Book NOt Found";
	exit();
}//outer if
echo "<form class='bookForm' action='bResult.php' method='POST'>
		Enter Book Title:
		<input type='text' name='title'/>
		<input type='submit' value='Go'/>
		</form>";
if(isset($_POST['author']))
{
	$author=$_POST['author'];
	$query=mysql_query("SELECT * FROM books WHERE author LIKE '%$author%'");
	echo "<table border='2' style:'border:5px solid black'>
			<thead> 
				<th> Acc No.</th>
				<th> Title</th>
				<th> Author</th>
				<th> Edition</th>
				<th> Status</th>
				<th> Type</th>
			</thead>";
			while($record=mysql_fetch_array($query))
				{
					$accNo=$record['accNo'];
					$title=$record['title'];
					$author=$record['author'];
					$edition=$record['edition'];
					$status=$record['status'];
					$type=$record['type'];
					echo "<tr>";
					echo "<td>".$accNo."</td>";
					echo "<td>".$title."</td>";
					echo "<td>".$author."</td>";
					echo "<td>".$edition."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$status."</td>";
				}//while ends
			echo "</tr></table>";
	if(!$query)
		echo"Book NOt Found";
	exit();
}//outer if
echo "<form class='bookForm' action='bResult.php' method='POST'>
		Enter Author's name:
		<input type='text' name='author'/>
		<input type='submit' value='Go'/>
		</form>";
if(isset($_POST['keyword']))
{
	$keyword=$_POST['keyword'];
	$query=mysql_query("SELECT * FROM books WHERE author LIKE '%$keyword%' or title LIKE '%$keyword%'");
	echo "<table border='2' style:'border:5px solid black'>
			<thead> 
				<th> Acc No.</th>
				<th> Title</th>
				<th> Author</th>
				<th> Edition</th>
				<th> Status</th>
				<th> Type</th>
			</thead>";
			while($record=mysql_fetch_array($query))
				{
					$accNo=$record['accNo'];
					$title=$record['title'];
					$author=$record['author'];
					$edition=$record['edition'];
					$status=$record['status'];
					$type=$record['type'];
					echo "<tr>";
					echo "<td>".$accNo."</td>";
					echo "<td>".$title."</td>";
					echo "<td>".$author."</td>";
					echo "<td>".$edition."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$status."</td>";
				}//while ends
			echo "</tr></table>";
	if(!$query)
		echo"Book NOt Found";
	exit();
}//outer if
echo "<form class='bookForm' action='bResult.php' method='POST'>
		Enter keyword:
		<input type='text' name='keyword'/>
		<input type='submit' value='Go'/>
		</form>";
  ?>