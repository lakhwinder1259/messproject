
<?php
echo " <div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;
width:1000 px;
height:auto;
border-radius:15 px;'><table border=1 style='border-collapse:collapse;'color='black' width=100%>
<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Cost of Issued Quantity</th>
<th>Date</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from itemissue ORDER BY `itemissue`.`date` DESC";
if($r=$con->query($cmd))
{
echo "<tr>";
while($row=$r->fetch_array())
{

echo "<td>".$row[1]."</td>";

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
}
echo"</table>";

	












?>