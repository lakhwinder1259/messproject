<?php
$cost=0;
$tcost=0;
$month=$_GET['q'];

echo " <div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'>
Total Purchase of the month &nbsp;&nbsp;:&nbsp;&nbsp;Rs.";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd1="select `totalcost` from purchase where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
if($r=$con->query($cmd1))
{
while($row=$r->fetch_array())
{
$cost=$cost+$row['totalcost'];
}}
echo $cost;}
?>
<?php
echo " </div><div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'>
Cost of Issued Items &nbsp;&nbsp;:&nbsp;&nbsp;Rs.";
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
echo $tcost;


if($con==true)
{
$cmd2="select `attendance` from s_attendance where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
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
echo "
<table border=1 style='border-collapse:collapse;'  color='black' width=100%><tr>
<th>Roll no.</th>
<th>Name</th>
<th>Attendance</th>
<th>Geyser Expenses</th>
<th>Per Day Diet</th>
<th>Total Cost</th>
</tr>";
$cmd="select * from s_attendance where `date` BETWEEN '2015-$month-01' AND '2015-$month-31' Group By `rollno` ";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[1]."</td>";
$cmd1="select `attendance` from s_attendance where `rollno`='".$row[2]."'";
			if($r1=$con->query($cmd1))
			{
			$total=0;
					while($row1=$r1->fetch_array())
					{
							
							$total=$total+$row1['attendance'];
							
					
					
					}}
			
			echo "<td>".$total."</td>";
			$perdiet=$tcost/$total1;
			$ge=60;
			$perstudent=($total*$perdiet)+$ge;
echo "<td>60</td> <td>".$perdiet."</td> <td>".$perstudent."</td></tr>";
}
}
echo"</table>";
}
?>