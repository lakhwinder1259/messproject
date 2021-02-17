<?php
$total=0;

$month=$_GET['q'];
$a=1;
$n=1;
echo "<br> <div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'><h2><center>Purchasing</center></h2><table border=1 style='border-collapse:collapse;'  color='black' width=100%>
<tr>
<th >Sr No.</th>
<th >Item Name</th>
<th >Quantity</th>
<th >Unit</th>
<th >Cost per unit</th>
<th >Final Cost</th>
<th >Date</th>

</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from purchase where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$a."</td>";
$a++;
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo"</tr>";
}}
echo"<tr><td colspan=5 style='margin-left:150px';>Total Cost:</td>";
echo"<td>";
$cmd1="select `totalcost` from purchase where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
if($r=$con->query($cmd1))
{
while($row=$r->fetch_array())
{
$total=$total+$row['totalcost'];
}}
echo $total."</td><td></td></tr>";
echo"</table>";
}



echo"<br><br><h2><center>Issued Items</center></h2><table border=1 style='border-collapse:collapse;'  color='black' width=100%>
<tr>
<th>Sr No.</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Cost of Issued Quantity</th>
<th>Date</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from itemissue where `date` BETWEEN '2015-$month-01' AND '2015-$month-31' ORDER BY `itemissue`.`date` DESC";
if($r=$con->query($cmd))
{
echo "<tr>";
while($row=$r->fetch_array())
{

echo "<td>".$n."</td>";
$n++;
$item_code=$row[1];
$cmd1="select * from itementry where `item_code`='$item_code'";
if($r1=$con->query($cmd1))
{
while($row1=$r1->fetch_array())
{ 
	echo"<td>".$row1[1]."</td>";
	
	}}

															
echo "<td>".$row[2]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[3]."</td>";
echo"</tr>";
}

}
echo"<tr><td colspan=3>Total Cost:</td><td>";
$cmd1="select * from itemissue where `date` BETWEEN '2015-$month-01' AND '2015-$month-31'";
$itotal=0;
if($r=$con->query($cmd1))
{
while($row=$r->fetch_array())
{
$itotal=$itotal+$row['4'];
}}
echo $itotal;
echo"</td><td></td></tr>";
}
echo"</table>";
?>
	
