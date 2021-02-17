<html>
<head> 
<style>

.a
{
text-align:center;	
background:#fff center;		
height:inherit;
width:20%;
border-radius:10;
float:left;
padding:5 px;
}
.b
{
text-align:center;	
background:#fff center;	
height:inherit;
width:20%;
border-radius:10;
float:right;
padding:5 px;
}

</style>
<link rel="stylesheet" href="style.css" type="text/css">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
<script type="text/javascript" src="engine1/jquery.js"></script>


<title>Mess management </title>
</head>
<body>	

	

	

	
	
<div id="content1">
<center><img src="images/logo1.png"></center>
</div>

<div id="content">
<div class="a"><table  border="0" align="center">
  <tr>
    <th font size="7"><strong>Management committee</strong></th>
  </tr>
  <tr>
    <td height="20"></td>
    <td></td>
  </tr>
  <tr>
    <td><a href="">Club Committee</a></td>
  </tr>
   <td height="10"></td>
  <td></td>
  <tr>
    <td><a href="">Mess Committee</a></td>
  </tr>
  <td height="10"></td>
  <td></td>
  <tr>
    <td><a href="">Anti Ragging Committee</a></td>
  </tr>
  </table></div>
<div class="b"><table  border="0" align="center">
  <tr>
    <th>NOTICE</th>
  </tr>
  </table>

<marquee direction="down" height="30%">
  
<table  border="0" align="center">
<tr>
    <td>Computer</td>
  </tr>
  <tr>
    <td>Civil</td>
  </tr>
  <tr>
    <td>Electrical</td>
  </tr>
  <tr>
    <td>Mechanical</td>
  </tr>
</table></marquee>

</div>

<center>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Image carousel" />
	



<div id="content">
<center>


	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_0"/></li>
		<li><img src="data1/images/gndp2.jpg" alt="gndp2" title="gndp2" id="wows1_1"/></li>
		<li><img src="data1/images/gndp4_2.jpg" alt="gndp4 (2)" title="gndp4 (2)" id="wows1_2"/></li>
		<li><img src="data1/images/gndp4.jpg" alt="gndp4" title="gndp4" id="wows1_3"/></li>
		<li><img src="data1/images/gndp5.jpg" alt="gndp5" title="gndp5" id="wows1_4"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/gndp6.jpg" alt="full screen slider" title="gndp6" id="wows1_5"/></a></li>
		<li><img src="data1/images/gnsdp3.jpg" alt="gnsdp3" title="gnsdp3" id="wows1_6"/></li>
	</ul></div>
<span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
    </div>

	
    </div>
	</div>
</center>
		
<center>
<div id="content1">
<form name="f1" method="post" >
<input type="submit" class="buttons" name="surveilance" value="surveilance">
<input type="submit" class="buttons" name="postcomplaint" value="complaints">

<input type="submit" class="buttons" name="stock" value="stock">
<input type="submit" class="buttons" name="logout" value="logout">
</center>
</form>
</div>
</body>
<?php
if (isset($_POST['stock']))
{
header('Location:form2.php');
}
if (isset($_POST['postcomplaint']))
{
header('Location:complains.php');
}
if (isset($_POST['surveilance']))
{
header('Location:camera.php');
}

if (isset($_POST['logout']))
{
header('Location:index.php');
}
?>
</html>
