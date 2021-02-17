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
<link rel="stylesheet" href="../style.css" type="text/css">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../engine1/style.css" media="screen" />
<script type="text/javascript" src="../engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<title>Mess management </title>	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->

	<link rel="stylesheet" type="text/css" href="../engine0/style.css" />

	<!--script type="text/javascript" src="engine0/jquery.js"></script-->

	<!-- End WOWSlider.com HEAD section --></head>
<body>	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->

	

	</div>	

	<script type="text/javascript" src="../engine0/wowslider.js"></script>

	<script type="text/javascript" src="../engine0/script.js"></script>

	<!-- End WOWSlider.com BODY section -->
<div id="content1">
<center><img src="../images/logo1.png"></center>
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
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="../engine0/style.css" />
	<script type="text/javascript" src="../engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:auto">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="../data0/images/gndp2.jpg" alt="gndp2" title="Sports Complex" id="wows0_0"/></li>
		<li><img src="../data0/images/gndp4_2.jpg" alt="gndp4 (2)" title="gndp4 (2)" id="wows0_1"/></li>
		<li><img src="../data0/images/gndp5.jpg" alt="gndp5" title="Hoste Mess" id="wows0_2"/></li>
		<li><a href="http://wowslider.com/vf"><img src="../data0/images/gndp6.jpg" alt="full screen slider" title="gndp6" id="wows0_3"/></a></li>
		<li><img src="../data0/images/gnsdp3.jpg" alt="gnsdp3" title="gnsdp3" id="wows0_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="gndp2"><img src="../data0/tooltips/gndp2.jpg" alt="gndp2"/>1</a>
		<a href="#" title="gndp4 (2)"><img src="../data0/tooltips/gndp4_2.jpg" alt="gndp4 (2)"/>2</a>
		<a href="#" title="gndp5"><img src="../data0/tooltips/gndp5.jpg" alt="gndp5"/>3</a>
		<a href="#" title="gndp6"><img src="../data0/tooltips/gndp6.jpg" alt="gndp6"/>4</a>
		<a href="#" title="gnsdp3"><img src="../data0/tooltips/gnsdp3.jpg" alt="gnsdp3"/>5</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="../engine0/wowslider.js"></script>
	<script type="text/javascript" src="../engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

	
    </div>
	</div>
</center>
		
<center>
<div id="content1">
<form name="f1" method="post" >
<input type="submit" class="buttons" name="mess bill" value="stock">
<input type="submit" class="buttons" name="post complaint" value="student entry">
<input type="submit" class="buttons" name="logout" value="logout">
</center>
</form>
</div>
</body>
<?php
if (isset($_POST['stock']))
{
header('Location:login2.php');
}
if (isset($_POST['attendance']))
{
header('Location:attendance.php');
}
if (isset($_POST['studententry']))
{
header('Location:inputpdata.php');
}
?>
</html>
