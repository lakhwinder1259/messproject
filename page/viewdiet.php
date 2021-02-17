<center>
	<div id="content1">
<div id="content13"><h2><diet chart></h2>
	</div>
	<h3>Monday Diet</h3>
	<?php
				echo "<table border=1  color='black' width=100%>
				<tr>
				<th>Day</th>
				<th>Meal Time</th>
				<th>Food Items</th>
				</tr>";
				$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
		$cmd="select * from mon_diet";
		if($r=$con->query($cmd))
		{
			while($row=$r->fetch_array())
			{
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[1]."</td>";
					echo "<td>".$row[2]."</td></tr>";
			}
		}
}
echo"</table>";

?>


<div id="content13"><h2><diet chart></h2>
	</div>
	<h3>Tuesday Diet</h3>
	<?php
				echo "<table border=1  color='black' width=100%>
				<tr>
				<th>Day</th>
				<th>Meal Time</th>
				<th>Food Items</th>
				</tr>";
				$con=new mysqli("localhost","root","","gndphostel");
					if($con==true)
					{
							$cmd="select * from tue_diet";
							if($r=$con->query($cmd))
							{
									while($row=$r->fetch_array())
									{
										echo "<tr>";
										echo "<td>".$row[0]."</td>";
										echo "<td>".$row[1]."</td>";
										echo "<td>".$row[2]."</td></tr>";
									}
							}
					}
echo"</table>";
?>

	<div id="content13"><h2><diet chart></h2>
	</div>
	<h3>Wednesday Diet</h3>
	<?php
echo "<table border=1  color='black' width=100%>
<tr>
<th>Day</th>
<th>Meal Time</th>
<th>Food Items</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from wed_diet";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td></tr>";
}
}
}
echo"</table>";
?>

	<div id="content13"><h2><diet chart></h2>
	</div>
	
	
	<h3>Thursday Diet</h3>
	<?php
echo "<table border=1  color='black' width=100%>
<tr>
<th>Day</th>
<th>Meal Time</th>
<th>Food Items</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from thr_diet";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td></tr>";
}
}
}
echo"</table>";
?>


	<div id="content13"><h2><diet chart></h2>
	</div>
	<h3>Friday Diet</h3>
	<?php
echo "<table border=1  color='black' width=100%>
<tr>
<th>Day</th>
<th>Meal Time</th>
<th>Food Items</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from fri_diet";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td></tr>";
}
}
}
echo"</table>";
?>

	<div id="content13"><h2><diet chart></h2>
	</div>
	<h3>Saturday Diet</h3>
	<?php
echo "<table border=1  color='black' width=100%>
<tr>
<th>Day</th>
<th>Meal Time</th>
<th>Food Items</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from sat_diet";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td></tr>";
}
}
}
echo"</table>";

?>
