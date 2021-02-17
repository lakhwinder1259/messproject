<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connect.php');
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
$UserType=$_POST['cmbUser'];
if ($UserType=="Mess Manager")
{
$sql = "select * from mess_login where MessUser_Name='".$UserName."' and mess_Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['UserName']=$row['UserName'];
header("location:mess_manage.php");
}
}
else if($UserType=="Dean")
{
$sql = "select * from dean_login where DeanUser_Name='".$UserName."' and Dean_Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
} 
else 
{
$_SESSION['UserName']=$row['UserName'];
header("location:dean.php");
}
}
else if($UserType=="Student")
{
$sql = "select * from personal_info where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
//$row = mysql_fetch_array($result);
if($records!=0)
{
while($row = mysql_fetch_array($result))
{
$_SESSION['Id']=$row['serial_no'];
$_SESSION['Name']=$row['name'];
$_SESSION['FName']=$row['f_name'];
$_SESSION['Gender']=$row['Gender'];
$_SESSION['Department']=$row['branch'];
$_SESSION['RegistrationNo']=$row['RegistrationNo'];
$_SESSION['RollNo']=$row['roll_no'];
$_SESSION['Section']=$row['Section'];
$_SESSION['Address']=$row['address'];
$_SESSION['MobileNo']=$row['ph_no'];
$_SESSION['Email']=$row['Email'];
$UserName=$row['UserName'];
$Password=$row['Password'];
$_SESSION['Password']=$Password;
$_SESSION['UserName']=$UserName;
echo '<script type="text/javascript">alert("successfully login");window.location=\'student.php\';</script>';
header('location:student.php');
}
} 
else 
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
mysql_close($con);
}

?>

</body>
</html>
