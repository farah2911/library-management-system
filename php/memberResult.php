<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
		text-align:centre;
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
</body>
</html>




<?php
$con=mysql_connect("localhost","root","") or die("connection failed");
$db = mysql_select_db("library",$con) or die("couldnot connect to database");

if(isset($_POST['search'])) // search block start
{
$memberId=$_POST['memberId'];
$mq1=mysql_query("select member.memberId,student.name,student.rollNo,student.semester,
student.department,student.batch, member.borrowingLimit,
member.status from member,student where member.memberId='$memberId' and student.memberId='$memberId' "); // select student_member 
$mq1_num=mysql_num_rows($mq1); // no of row of selected student_member 
$mq2=mysql_query("select member.memberId,staff.name,staff.designation,staff.department,
member.borrowingLimit,member.status
from member,staff where member.memberId='$memberId' and staff.memberId='$memberId' "); // select staff_member
$mq2_num=mysql_num_rows($mq2); // no of row of selected staff_member

if(isset($_POST['member_update']))
{
$status=$_POST['status'];
$mq_update=mysql_query("update member set status='$status' where memberId='$memberId'");} // update member status if member_update is pressed

if($mq1_num!=0) 
{
$record=mysql_fetch_array($mq1);  // fetch details of selected student_member 
$memberId=$record['memberId'];
$name=$record['name'];
$rollNo=$record['rollNo'];
$semester=$record['semester'];
$department=$record['department'];
$batch=$record['batch']; 
$borrowingLimit=$record['borrowingLimit'];
$status=$record['status'];
echo "<form>";
echo "<table border='1'>";
echo "<tr><td><th>MemberId:</th></td><td><input type='text' name='memberId' value=" . $memberId . " ></td></tr>";
echo "<tr><td><th>Name:</th></td><td><input type='text' name='name' value=" . $name . " ></td></tr>";
echo "<tr><td><th>rolNo:</th></td><td><input type='text' name='rollNo' value=" . $rollNo . " ></td></tr>";
echo "<tr><td><th>Semester:</th></td><td><input type='text' name='semester' value=" . $semester . " ></td></tr>";
echo "<tr><td><th>Department:</th></td><td><input type='text' name='department' value=" . $department . " ></td></tr>";
echo "<tr><td><th>Batch:</th></td><td><input type='text' name='batch' value=" . $batch . " ></td></tr>";
echo "<tr><td><th>Borrowinglimit:</th></td><td><input type='text' name='borrowingLimit' value=" . $borrowingLimit . " ></td></tr>";
echo "<tr><td><th>Status:</th></td><td><input type='text' name='status' value=" . $status . " ></td></tr>";
echo "<tr><td colspan='3'><input type='submit' name='member_update' value='update'></td></tr>";
echo "</tr></table>";
echo "</form>";
}  // display details of selected student_member
else if($mq2_num!=0)
{
$record=mysql_fetch_array($mq2);  // fetch details of selected staff_member 
$memberId=$record['memberId'];
$name=$record['name'];
$designation=$record['designation'];
$department=$record['department']; 
$borrowingLimit=$record['borrowingLimit'];
$status=$record['status'];
echo "<form>";
echo "<table border='1'>";
echo "<tr><td><th>MemberId:</th></td><td><input type='text' value=" . $memberId . " ></td></tr>";
echo "<tr><td><th>Name:</th></td><td><input type='text' value=" . $name . " ></td></tr>";
echo "<tr><td><th>Designation:</th></td><td><input type='text' value=" . $designation . " ></td></tr>";
echo "<tr><td><th>Department:</th></td><td><input type='text' value=" . $department . " ></td></tr>";
echo "<tr><td><th>Borrowinglimit:</th></td><td><input type='text' value=" . $borrowingLimit . " ></td></tr>";
echo "<tr><td><th>Status:</th></td><td><input type='text' name='status' value=" . $status . " ></td></tr>";
echo "<tr><td colspan='3'><input type='submit' name='member_update' value='update'></td></tr>";
echo "</tr></table>";
echo "</form>";
} // display details of selected staff_member 

$mq_trans=mysql_query("select transId,memberId,accNo,issueDate,dueDate,status from transaction where transaction.memberId='$memberId' and transaction.status='issued'"); // select transaction
$trans_num=mysql_num_rows($mq_trans); // no of row of selected transaction

echo "<table border='1'><tr>
<th>TransId </th>
<th>MemberId</th>
<th>Acc.No.</th>
<th>IssueDate</th>
<th>DueDate</th>
<th>Status</th>
<th>ReturnDate</th>
<th>Fine</th>
</tr>";
if($trans_num==1)
{
if(isset($_POST['transaction_update']))
{$transId=$_POST['transId'];
$accNo=$_POST['accNo'];
$rstatus=$_POST['status'];
$returnDate=$_POST['returnDate'];
$fine=$_POST['fine'];
$trans_update=mysql_query("update transaction set status='$rstatus',returnDate='$returnDate',fine='$fine' where transId='$transId'");
$bstatus="A";
$book_update=mysql_query("update book set status='$bstatus' where accNo='$accNo'");
} // update transaction and book.status if transaction_update is pressed
$record=mysql_fetch_array($mq_trans); // fetch details of selected transaction
$transId=$record['transId'];
$accNo=$record['accNo'];
$memberId=$record['memberId'];
$issueDate=$record['issueDate'];
$dueDate=$record['dueDate'];
$istatus=$record['status'];
echo "<form method='post'>";
echo "<tr><td><input type='text' name='transId' value=" . $transId . "></td>";
echo "<td><input type='text' name='memberId' value=" . $memberId . "></td>";
echo "<td><input type='text' name='accNo' value=" . $accNo . "></td>";
echo "<td><input type='date' name='issueDate' value=" . $issueDate . "></td>";
echo "<td><input type='date' name='dueDate' value=" . $dueDate . "></td>";
echo "<td><input type='text' name='status' value=" . $istatus . "></td>";
echo "<td><input type='date' name='returnDate' ></td>";
echo "<td><input type='text' name='fine' ></td>";
echo "<td><input type='submit' name='transaction_update' value='update' ></td>";
echo "</form></tr>";
echo "</table>";
} // display details of selected transaction

if($trans_num==0)
{
if(isset($_POST['insert']))
{
$trans_insert=mysql_query("insert into transaction(accNo,memberId,issueDate,dueDate,status) values('$_POST[memberId]','$_POST[accNo]','$_POST[issueDate]','$_POST[dueDate]','$_POST[status]')");
$bstatus="N/A";
$book_update=mysql_query("update book set status='$bstatus' where accNo='$_POST[accNo]'");
} // insert transacttion and update book.status if insert is pressed
echo "<tr><form method='post'>
<td><input type='text' name='transId' </td>
<td><input type='text' name='memberId' value=" . $memberId . "></td>
<td><input type='text' name='accNo' </td>
<td><input type='date' name='issueDate' </td>
<td><input type='date' name='dueDate' </td>
<td><input type='text' name='status' </td>
<td><input type='date' name='returnDate' </td>
<td><input type='text' name='fine' </td>
<td><input type='submit' name='insert' value='insert' </td>
</form></tr>";
}  //  display empty form to insert transaction

} // search block end

mysql_close($con);
?>