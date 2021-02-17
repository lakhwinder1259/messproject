
<?php

echo " <div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;
width:1000 px;
height:auto;
border-radius:15 px;'>
		<center><h2>Order</h2></center>
<table border=1  style='border-collapse:collapse;'color='black' width=100%>
	<tr>
			<td><h3>Item code</h3></td>
			<td><h3>Item name</h3></td>
			<td><h3>Balance</h3></td>
			<td><h3>vendor</h3></td>
	
	</tr>
";		
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from itementry";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
//echo "<td>".$row[2]."</td>";
echo "<td>";
			$cmd1="select * from itemissue where `item_code`='".$row[0]."'";
			$total=0;
			if($r1=$con->query($cmd1))
			{
					while($row1=$r1->fetch_array())
					{	
							$total=$total+$row1['2'];
					}
			}
			
		$t=$row[2]-$total;
		$t1=10/100*$row[2];
			//echo $total;
		//	echo "</td><td>";
			if($t<$t1)
				{
					echo "<img src='images/alert-100.tiff' height=10 width=50>";echo"&nbsp;&nbsp;&nbsp;"; echo $t;
				}
			

echo "</td>";
echo "<td>";

		$a=0;							
													
																$cmd1="select * from itementry where `item_code`='".$row[0]."'";
																
																if($r1=$con->query($cmd1))
                                                                {
																	while($row1=$r1->fetch_array())
																	{
																			$str=$row[6];
																			$arr=explode(',',$str);
																			echo"<select name='vendor'>";
																			foreach($arr as $s){
																			echo "<option value='".$a++."'>".$s."</option>";
																			}
																			echo "</select></td></tr>";
																	}
																	
																    
														        }
										
									
									
 
}
}

}
echo"</table>";


?>