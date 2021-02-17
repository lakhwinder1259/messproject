<html><head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		
		</head>
<?php
session_start();
$cost=0;
$tcost=0;
$month=$_GET['q'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
echo $_SESSION['Name'];
}
?>
<body>
<?php
echo " </div><div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from itemissue where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
$tcost=$tcost+$row['4'];
}}}



if($con==true)
{
echo $_SESSION['Name'];
$cmd2="select `attendance` from s_attendance where `rollno` = '".$_SESSION['Name']."'  && `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
			if($r1=$con->query($cmd2))
			{
			$total1=0;
					while($row1=$r1->fetch_array())
					{
							
							$total1=$total1+$row1['attendance'];
							
					
					
					}}
					echo "<br> Total Attendance &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;".$total1;
					}
if($con==true)
{

$cmd="select * from s_attendance where `rollno` = '".$_SESSION['Name']."' && `date` BETWEEN '2015-$month-01' AND '2015-$month-31' ";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo"</br><b> Rollno:----</b>";
echo$row[2];
echo "</br> <b> Name:-----</b>";
echo $row[1];
}}
$cmd1="select * from s_attendance where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
			if($r1=$con->query($cmd1))
			{
			$total=0;
					while($row1=$r1->fetch_array())
					{
							
							$total=$total+$row1['4'];
							
					
					
					}}
			
			
			$perdiet=$tcost/$total;
			$ge=60;
			$perstudent=($total1*$perdiet)+$ge;
echo "<br><b>Bill :---</b> ".$perstudent;
}

echo"</table>";

?>
</body>
</html>