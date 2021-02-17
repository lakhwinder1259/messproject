<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		<style>
					#list li{
							width:120px;
							height:30px;
							background:black;
							margin:2px;
							float:left;
							color:white;
							font-size:18px;
							list-style-type:none;
							text-align:center;
							padding-top:3px;
							border:1px solid white;
					}
		</style>
	</head>
	<body>
		<div id="content">
					<center>
							<img src="images/logo1.png">
					</center>
		</div>
			<center>
			<div id="content" >
							<ul id="list">
							<div style= "margin-left:320px;">
									<a href="?p=additem"><li>Add New Item</li></a>
									<a href="?p=itemsum"><li>Item Summary</li></a>
									<a href="?p=itemissue"><li>Item Issue</li></a>
									<a href="?p=issuesum"><li> Issue Summary</li></a>
									<a href="?p=viewdiet"><li>View Diet</li></a>
									<a href="?p=order"><li>Order</li></a>
									<a href="?p=expense"><li>Expenses</li></a>
									<a href="?p=calculate"><li>Diet Calculator</li></a>
									<a href="?p=logout"><li>Logout</li></a>
									</div>
							</ul>
			</div>
			</center>
			<br/>
			<br/>
			<br/>
			<?php
			
					if(isset($_GET['p']))
						{
								include 'page/'.$_GET['p'].'.php';
						}
			
			?>

</body>
</html>





















