<?php
if(isset($_POST['login']))
{
session_start();

$password=$_POST['password'];
$username=$_POST['username'];
$UserType=$_POST['cmbUser'];
	$con=new mysqli("localhost","root","","gndphostel");
	if ($UserType=="1")
	{
		$cmd="Select * from mess_login where MessUser_Name='$username' and mess_Password='$password'";
		if($r=$con->query($cmd))
		{
			if($r->num_rows>0)
			{	
				$_SESSION['user']=$username;
				header('location:mess_manage.php');
			}
			else
			{
				echo"Invalid Username or Password";
			}
		}
	else
		{
			echo"Query Problem";
		}
	}
	if ($UserType=="3")
	{
		$cmd="Select * from dean_login where DeanUser_Name='$username' and Dean_Password='$password'";
		if($r=$con->query($cmd))
		{
			if($r->num_rows>0)
			{
			
			
		
			
			
				$_SESSION['user']=$username;
				header('location:Dean.php');
			}
			else
			{
				echo"Invalid Username or Password";
			}
		}
	else
		{
			echo"Query Problem";
		}
	}
	if ($UserType=="2")
	{
		
$sql = "select * from user_tbl where UserName='$username' AND Password ='$password'  ";
// Execute query
$con = mysql_connect("localhost","root");
mysql_select_db("cms", $con);
$sql = "select * from user_tbl where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{

/* testing*/



$sql = "select * from user_tbl where User_Id='".$_SESSION['ID']."' ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['User_Id'];
$_SESSION['Name']=$row['Name'];
$_SESSION['FName']=$row['FName'];
$_SESSION['Gender']=$row['Gender'];
$_SESSION['Department']=$row['Department'];
$_SESSION['RegistrationNo']=$row['RegistrationNo'];
$_SESSION['RollNo']=$row['RollNo'];
$_SESSION['Section']=$row['Section'];
$_SESSION['Address']=$row['Address'];
$_SESSION['MobileNo']=$row['MobileNo'];
$_SESSION['Email']=$row['Email'];
$UserName=$row['UserName'];
$Password=$row['Password'];


			


}






echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'newff.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['User_Id'];
$_SESSION['Name']=$row['Name'];
$_SESSION['Name']=$row['Name'];
$_SESSION['FName']=$row['FName'];
$_SESSION['Gender']=$row['Gender'];
$_SESSION['Department']=$row['Department'];
$_SESSION['RegistrationNo']=$row['RegistrationNo'];
$_SESSION['RollNo']=$row['RollNo'];
$_SESSION['Section']=$row['Section'];
$_SESSION['Address']=$row['Address'];
$_SESSION['MobileNo']=$row['MobileNo'];
$_SESSION['Email']=$row['Email'];
$UserName=$row['UserName'];
$Password=$row['Password'];

header("location:newff.php");

}
mysql_close($con);
}
}
		
?>
