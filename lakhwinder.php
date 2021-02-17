<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="f1" action="mohit.php" method="post">
Timing<input type="text" name="t1"><br>
<input type="submit" value="Details" name="b1">
</form>
<?php
if(isset($_POST['b1']))
{
$n=$_POST['t1']; 
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from mon_diet where meal_time='$n'";
if($r=$con->query($cmd))
{
if($rw=$r->fetch_array())
{
echo"Day      :<input type='text' name='t1' value='$rw[0]' readonly><br>";
echo"Meal Time:<input type='text' name='t2' value='$rw[1]' readonly><br>";
echo"Food Item:<input type='text' name='t3' value='$rw[2]'readonly><br>";
}
else
{
echo"data not found";
}
}
else
{
echo"query problem";
}
}
else
{
echo"connection problem";
}
}

?>
</body>
</html>