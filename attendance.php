
<html>

<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<title>Student_attendance</title>
</head>
<body ><center>
<div id="content1">
<center><img src="images/logo1.png"></center>
</div>
<div id="content">
<form action="attendance.php"method="post"name="f1"> 
<font size="5"face="Times New Roman"> <b>Roll Number</font><font size="4">:</font><input type="text" name="t20" maxlength="4"> <input name="b1" type="submit"  value="Show" style="width:100px">

</div>

<div id="content1"><center>
<?php

if(isset($_POST['b1']))
{
	$n=$_POST['t20'];
 
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from personal_info where roll_no='$n'";
if($r=$con->query($cmd))
{
if($rw=$r->fetch_array())
{
	
	$dat=date('d/m/y');
echo"Name  :<input type='text' name='t1' value='.$rw[3].'><br>";
echo"Roll no:<input type='text' roll no='t2' value='$rw[1]'><br>";
}}
echo"Date :<input type='date' value= '$dat' name='t3'><br>";

echo"Attendance:<input type='radio' name='r1' value='Present' />Present<input type='radio' name='r1' value='Absent' />Absent<br>";
echo"<input name='b2' type='submit'  value='Submit' style='width:100px'>";
if(isset($_POST['b2']))
{
	$n1=$_POST['t1'];
	
	$d=$_POST['t3'];
	$a=$_POST['r1'];
	
$cmd1="insert into s_attendance values('$n1','$t20','$d','$a')";
	if($con->query($cmd1)==true)
	{
		echo "One record inserted";
	}
	else
	{
	 echo "connection problem";
	}
	

}
}}
?>
</div></center>
<div id="content1"><center>
<a href="index.php">Home</a>
</div></center>
</form>
</body>
</html>