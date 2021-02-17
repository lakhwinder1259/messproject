<html>
<body bgcolor="brown">

<?php
if (!isset($_SESSION)) 
{
  session_start();
  }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

if(isset($_POST['button1']))
{
	$Cul_RollNo=$_POST['txtRollNo'];
		$Description=$_POST['txtDescription'];
	$Date=date('y/m/d');
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("gndphostel", $con);
	// Specify the query to Insert Record
	$sql = "insert into complaint_tbl (Cul_RollNo,Description,Date,Name,Fname,Gender,Department,RegistrationNo,S_RollNo,Section,Address,MobileNo,Email) values('".$Cul_RollNo."','".$Description."','".$Date."','".$_SESSION['Name']."','".$_SESSION['FName']."','".$_SESSION['Gender']."','".$_SESSION['Department']."','".$_SESSION['RegistrationNo']."','".$_SESSION['RollNo']."','".$_SESSION['Section']."','".$_SESSION['Address']."','".$_SESSION['MobileNo']."','".$_SESSION['Email']."')";
	// execute query
	$a=mysql_query ($sql,$con);
	if($a)
	{
	echo '<script type="text/javascript">alert("Complaint Inserted Succesfully");window.location=\'student.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("Complaint not inserted")</script>'; 
	
	}
	}
	


/******************    For Without Roll No   **************/


if(isset($_POST['button2']))
{
 
	$SDescription=$_POST['txtSDescription'];
		$Description=$_POST['txtDescription'];
	$Date=date('y/m/d');
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("gndphostel", $con);
	// Specify the query to Insert Record
	$sql = "insert into complaint_tbl (Description,SDescription,Date,Name,Fname,Gender,Department,RegistrationNo,S_RollNo,Section,Address,MobileNo,Email) values('".$Description."','".$SDescription."','".$Date."','".$_SESSION['Name']."','".$_SESSION['FName']."','".$_SESSION['Gender']."','".$_SESSION['Department']."','".$_SESSION['RegistrationNo']."','".$_SESSION['RollNo']."','".$_SESSION['Section']."','".$_SESSION['Address']."','".$_SESSION['MobileNo']."','".$_SESSION['Email']."')";
	// execute query
	$a=mysql_query ($sql,$con);
	if($a)
	{
	echo '<script type="text/javascript">alert("Complaint Inserted Succesfully");window.location=\'student.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("Complaint not inserted")</script>'; 
	
	}
	}
	


	
	/********************* For facilities ********************/
	
	
	
	
	if(isset($_POST['button3']))
{
		$Description=$_POST['txtDescription'];
	$Date=date('y/m/d');
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("gndphostel", $con);
	// Specify the query to Insert Record
	$sql = "insert into complaint_tbl (Description,Date,Name,Fname,Gender,Department,RegistrationNo,S_RollNo,Section,Address,MobileNo,Email) values('".$Description."','".$Date."','".$_SESSION['Name']."','".$_SESSION['FName']."','".$_SESSION['Gender']."','".$_SESSION['Department']."','".$_SESSION['RegistrationNo']."','".$_SESSION['RollNo']."','".$_SESSION['Section']."','".$_SESSION['Address']."','".$_SESSION['MobileNo']."','".$_SESSION['Email']."')";
	// execute query
	$a=mysql_query ($sql,$con);
	if($a)
	{
	echo '<script type="text/javascript">alert("Complaint Inserted Succesfully");window.location=\'student.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("Complaint not inserted")</script>'; 
	
	}
	}
	
	
	?>

<?php
if (!isset($_SESSION)) 
{
  session_destroy();
  }
?>
</body>
</html>
