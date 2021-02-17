								<script>
										function get_data(str)
										{
											if (str == "") {
												document.getElementById("q1").innerHTML = "";
												return;
												} else { 
													if (window.XMLHttpRequest) {
													// code for IE7+, Firefox, Chrome, Opera, Safari
														xmlhttp = new XMLHttpRequest();
															} else {
													// code for IE6, IE5
														xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
															}
																xmlhttp.onreadystatechange = function() {
														if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
														document.getElementById("q1").innerHTML = xmlhttp.responseText;
															}
															}
																xmlhttp.open("GET","page/get_item.php?q="+str,true);
																xmlhttp.send();
															}	
															}
										
										
										
									
									</script>
								
								
							<link rel="stylesheet" href="style1.css" type="text/css" media="screen">
								<table width="100%" height="70%"  border=0 align="center">
								<tr>
					
								<div width="400px">
								<div id="content2">
								<div id="content11">


								<center><h2 style ='background:#fff center'> Issue items</h2></center>
								</div>
								<div style='background:#fff center;
											margin-left:320px;
											
											padding:5 px;
											box-shadow:4px 4px 6px #fff;
											width:1000 px;
											height:auto;
											border-radius:15 px;'>
										
									<form  method=post style='background:#fff center' >
									<center><table style='margin-left:320px; margin-right:300px;' width="50%" height="70%"  border=0 align="center" bgcolor="white" >
								<tr></tr>
								<?php
									echo "<tr ><th >Item name : </th><th>
									
									<select name='item_code' onchange='get_data(this.value)' id='item_code'>";
									echo "<option value='0'>--Select item--</option>";	
										$dat=date('20y/m/d');
													
														$con=new mysqli("localhost","root","","gndphostel");
														if($con==true)
														{
																$cmd="select * from itementry";
																if($r=$con->query($cmd))
																{
																	while($row=$r->fetch_array())
																	{
																			
																			echo "<option value='".$row[0]."'>".$row[1]."</option>";
																	}
																}
														}
														
										
									echo"</select>
									
									</th></tr>
										
			<tr><th><div id='q1'></th></tr>		
	
	<tr ><th style='margin-left:320px; margin-right:300'>Quantity Issue: </th><th><input type='text' name='quantity_issue'></th> </tr>
	<tr ><th style='margin-left:320px; margin-right:300'> Date:</th><th><input type='text' name='date' value=' $dat'></th></tr>
	
	<tr><th><th><input type='submit' name='submit2' value='submit'></th></th></tr>
	
	</table></center>
	</form>
	</div>
	</th>
	</tr></table></center></div>";
	
	if (isset($_POST['submit2']))
	{

 
	$item_code1=$_POST['item_code'];
	$quantity=$_POST['quantity_issue'];
	$date=$_POST['date'];
	if (($quantity==null)||($date==null))
	{
	echo"<div id='content1'>Enter the valid data</div>";
	}
	else{
	$con= new mysqli("localhost","root","","gndphostel");
	if($con==true)
	{
	$cmd1="select * from itementry where `item_code`='$item_code1'";
	if($r1=$con->query($cmd1))
	{
	while($row1=$r1->fetch_array())
	{ 
	$cost1=$row1[4]; 
	}}
	$cost=$cost1*$quantity;
	$cmd="insert into itemissue values(null,'$item_code1','$quantity','$date','$cost')";
	if($con->query($cmd)==true)
	{
	echo"<script>alert('Item Issued');
							
					</script>";
	}
	}}}
	
	?>
	
	