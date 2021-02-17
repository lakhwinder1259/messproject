	<?php
	$dat=date('20y/m/d');
	echo"<center>";
	echo"<div id='content11'>


								<center><h2 style ='background:#fff center'> Add items</h2></center>
								</div><br/>";
	echo "<div style='margin-left:320px; margin-right:300px;'>";
	echo "<div id='content'>
							<form  method='post'>
							<table align='center'>
							
							
							<form  method='post' form action='form.php'>
							<table align='center'>
				
							<tr><th>Item name:</th><th></th><th><input type='text' name='item_name'>
							
							</th></tr>
							
							<tr><th>Quantity : </th><th></th><th><input type='text' name='quantity'></th>
							<th>Unit: </th><th> <select name='unit'>
							<option value ='kg'>kg</option>
							<option value ='grams'>grams</option>
							<option value ='litres'>litres</option>
							<option value ='ml'>ml</option>
							<option value ='packets'>packets</option>
							<option value ='quintal'>quintal<option><select></th></tr>
							<tr><th>Cost per unit : </th><th></th><th><input type='text' name='cost'></th></tr>
							<tr><th>Vendor : </th><th></th><th><input type='text' name='vendor'></th></tr>
	   				        <tr><th> Date: </th><th></th><th><input type='text' name='d1' value='$dat'</th>
							
							<tr><th><th></th></th><th><input type='submit' name='submit' value='submit'></th></tr>
							
							</table>
							</form></center>";


							if (isset($_POST['submit']))
	{
	
		$item_name=$_POST['item_name'];
		$quantity=$_POST['quantity'];
		$cost=$_POST['cost'];
		$vendor=$_POST['vendor'];
		$unit=$_POST['unit'];
		if(($item_name==null)||($quantity==null)||($cost==null)||($vendor==null)||($unit==null))
		{
		echo "<div id='content1' size=7> Enter valid data</div>";
		}
		else{
	
		$con= new mysqli("localhost","root","","gndphostel");
		if($con==true)
		{
				$cmd="insert into itementry values('','$item_name','$quantity','$unit','$cost','$dat','$vendor')";
				if($con->query($cmd)==true)
				{
					//echo"Item Entered";e
					echo "<script>alert('Item Entered');
							window.location='form2.php?p=itemsum';
					</script>";
				}
		}
	else{
			echo"Connection Problem";
		}
	}
	$totalcost=$quantity*$cost;
	$con= new mysqli("localhost","root","","gndphostel");
		if($con==true)
		{
				$cmd1="insert into purchase values('','$item_name','$quantity','$unit','$cost','$totalcost','$dat')";
				$con->query($cmd1);
		}
		}
	?>