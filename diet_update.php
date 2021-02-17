<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<title>Student_attendance</title>
</head>
<body >
<?php
$con=new mysqli("localhost","root","","gndphostel");
?><center>
<div id="content1">
<center><img src="images/logo1.png"></center>
</div>
<div id="content">
<form name="f1" action="diet_update.php"  method="POST">
<input type="submit" name="b1"value="Monday"><input type="submit" name="b2"value="Tuesday"><input type="submit" name="b3"value="Wednesday"><input type="submit" name="b4"value="Thrusday"><input type="submit" name="b5"value="Friday"><input type="submit" name="b6"value="Saturday"><input type="submit" name="b7"value="Sunday">&nbsp;&nbsp;<input type="submit" name="b8"value="DIET CHART">
</form>
</div>
<div id="content1">
<?php
																// MONDAY DIET
													
if(isset($_POST['b1']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from mon_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>MONDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u1'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u1']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  mon_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


 <div id="content1">
<?php
																//TUESDAY DIET

if(isset($_POST['b2']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from tue_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>TUESDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]' size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u2'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u2']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  tue_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


<div id="content1">
<?php
																//WEDNESDAY DIET

if(isset($_POST['b3']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from wed_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>WEDNESDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u3'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u3']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  wed_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


<div id="content1">
<?php
																//THRUSDAY DIET

if(isset($_POST['b4']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from thr_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>THRUSDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u4'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u4']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  thr_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


<div id="content1">
<?php
																//FRIDAY DIET
																
if(isset($_POST['b5']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from fri_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>FRIDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u5'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u5']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  fri_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


<div id="content1">
<?php
																//SATURDAY DIET

if(isset($_POST['b6']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from sat_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>SATURDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u6'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u6']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  sat_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>


<div id="content1">
<?php
																//SUNDAY DIET
if(isset($_POST['b7']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from sun_diet";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<b>SUNDAY DIET</b>";
echo"<form name=f1 action=diet_update.php method=post>
<b>Breakfast</b>&nbsp;<input type='text' name='t1' value='$rw[0]'size='40'><br>
<b>Lunch&nbsp</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t2' value='$rw[1]'size='40'><br>
<b>Dinner</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='t3' value='$rw[2]'size='40'><br>
<input type='submit' name='u7'value='update'>
</form>";

}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
?>

<?php

if(isset($_POST['u7']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="update  sun_diet set breakfast='$a',lunch='$b',dinner='$c'";

if($con->query($cmd)==true)
{

echo "Diet Update Successfully";
}

else
{
echo "Query Problem";
}
}
else
{
echo "Connection Problem";
}
}
?>
</div>
<?php
if(isset($_POST['b8']))
{
	header('location:form2.php?p=viewdiet');
}
?>
</center>
<div id="content786"><center>
<a href="index.php"><abbr title="HOME"><img src="images/red-home-icon.png"width="50" height="50"></abbr></a>
</div></center>
</form>
</body>
</html>