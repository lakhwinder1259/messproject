<?php
				$item_code=$_GET['q'];
				if($item_code==0)
				{
					echo"<div style='margin-left:320px;' Select Some item</div>";
				}
				else
				{
								echo"<div style='margin-left:320px;'>Original Quantity:";
	
	
														$con=new mysqli("localhost","root","","gndphostel");
														if($con==true)
														{
														$cmd1="select * from itementry where `item_code`='$item_code'";
														
			                                                         if($r1=$con->query($cmd1))
																			 {
																				while($row1=$r1->fetch_array())
																									{	
																										echo "<th>".$row1[2]."</th>";
																										echo "<th>".$row1[3]."</th>";
																										$qty=$row1[2];
																										$unit=$row1[3];
																									}
																			 }
			
																
																
																echo"<th></th></tr><br><th></th><th>
	Quantity Left : </th><th></th><th>";
	                                                           
																$cmd2="select * from itemissue where `item_code`='$item_code'";
																
																		$total=0;
																			if($r1=$con->query($cmd2))
																		{
																						while($row1=$r1->fetch_array())
																									{	
																											$total=$total+$row1[2];
																									}
																		}
					$t= $qty-$total;
			
					echo ($t); echo "<th>".$unit."</th></tr>";
					echo"<br><tr><th></th></tr><tr><th><th></th></th><th>Quantity Used : </th><th></th><th>";
					echo $qty-$t ; echo "<th>".$unit."</div></th></tr><br>";
				}}
														
			?>