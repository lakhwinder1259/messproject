
<?php
echo " <div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'><table border=1 style='border-collapse:collapse;'  color='black' width=100%>
<tr>
<th rowspan=2>Date</th>
<th rowspan=2>Item Code</th>
<th rowspan=2>Item Name</th>
<th rowspan=2>Unit</th>
<th rowspan=2>Remaining Balance</th>
<th colspan=2>Original Purchase</th>
<th rowspan=2>Issued Stock</th>
<th rowspan=2>Delete</th>
<th rowspan=2>Edit</th>
</tr>
<tr>
<th>Quantity</th>
<th>Price/unit</th>
</tr>";
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from itementry";
if($r=$con->query($cmd))
{
while($row=$r->fetch_array())
{
echo "<tr>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[3]."</td>";
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
			$t= $row[2]-$total;
			if($t<0)
				{
					echo "0";
					
				}
			else{
					echo $t;
			}
			echo "</td>";
			

echo "<td>".$row[2]."</td>";
echo "<td>".$row[4]."</td>";

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
			/*$t= $row[2]-$total;
			if($t<0)
				{
					echo "0";
					
				}
			else{
					echo $t;
			}*/
			echo $total;

echo "
	<td><a href='form2.php?p=".$_GET['p']."&&d=".$row['0']."'>Delete</a></td>
	<td><a href='form2.php?p=".$_GET['p']."&&e=".$row['0']."'>Update Stock</a></td>
</tr>";
}
}
}
echo"</table>";



		if(isset($_GET['d']))
		{
					$con=new mysqli("localhost","root","","gndphostel");
					if($con==true)
					{
							$cmd3="Delete from itementry where `item_code`='".$_GET['d']."'";
							$con->query($cmd3);
							
							
					}
		
		
		
		
		}
		$dat=date('20y/m/d');
		if(isset($_GET['e']))
		{
		$ic=$_GET['e'];
					$con=new mysqli("localhost","root","","gndphostel");
					if($con==true)
					{
							$cmd="select * from itementry where `item_code`='$ic'";
							if($r=$con->query($cmd))
							{
							if($row=$r->fetch_array())
								{
										echo "<form method='post'>
											<center>		<table>
															<tr>
																	<td>Item Name</td>
																	<td>:</td>
																	<td><input type='text' value='".$row[1]."' name='nm'></td>
															</tr>
															<tr>
																	<td>Quantity</td>
																	<td>:</td>
																	<td><input type='text' name='qu'></td>
															</tr>
															<tr>
																	<td>Price</td>
																	<td>:</td>
																	<td><input type='text' name='pr'></td>
															</tr>
															<tr>
																	<td>Vendor</td>
																	<td>:</td>
																	<td><input type='text' name='v'></td>
															</tr>
																														<tr>
																	<td>Date</td>
																	<td>:</td>
																	<td><input type='text' value='$dat'></td>
															</tr>
		            											
															<tr>
																	<td></td>
																	<td></td>
																	<td><input type='submit' name='item_update' value='Update'></td>
															</tr>
													         
													</table></center>
											</form>";
								}
							}
							
					}
		
		
		
		
		}
		
		if(isset($_POST['item_update']))
		{
		$ve=$_POST['v'];		
		$qu=$_POST['qu'];
		$pr=$_POST['pr'];
		$nm=$_POST['nm'];			
					$cmd2="Select * from itementry where `item_code`='$ic'";
					if($r=$con->query($cmd2))
					{
																while($row=$r->fetch_array())
																{
																$qu1= $row[2];
																$ven=$row[6];
																$unit=$row[3];
																}
																$qty=$qu1+$qu;
																
				
																$arr=array($ven,$ve);
																$arr1=implode(',',$arr);
					}																
						 $cmd="update `itementry` set `item_name`='$nm', `quantity`='$qty', `costperunit` = '$pr',`vendor` = '$arr1',`date` = '$dat' where `item_code`='$ic' ";
							$con->query($cmd);
							if($cmd==true)
							{
							echo"<script>alert('Item Updated')</script>";
							echo "<script>window.location='?p=".$_GET['p']."';</script>";
							
					}
					$totalcost=$pr*$qu;
					$con= new mysqli("localhost","root","","gndphostel");
					if($con==true)
					{
					$cmd1="insert into purchase values('$e','$nm','$qu','$unit','$pr','$totalcost','$dat')";
					$con->query($cmd1);
					if($cmd1==true)
							{
							echo"good";
					}}
			}



?>