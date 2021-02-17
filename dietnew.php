<html>
<form name="f1" action="addhospital.php" method="post">
Hospital Name<input type="text" name="t1"><br>
<input type="submit" value="Details" name="b1">
<br>
</form>
<?php
if(isset($_POST['b1']))
{
$n=$_POST['t1']; 
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from mon_diet day='$n'";
if($r=$con->query($cmd))
{
if($rw=$r->fetch_array())
{
echo"day_______________  ".$rw[0]."<br>";
echo"meal_time_________  ".$rw[1]."<br>";  
echo"food_items________  ".$rw[2]."<br>";
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
</html>