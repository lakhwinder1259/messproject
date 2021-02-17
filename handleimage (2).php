<?php
session_start();
$_SESSION['id']="";
$id=$_SESSION['id'];
include 'connection.php';
$name = date('YmdHis');
$newname="images/".$name.".jpg";
$file = file_put_contents( $newname, file_get_contents('php://input') );
if (!$file) {
	print "Error occured here";
	exit();
}
else
{
    $sql="insert into image (images,id,name) values ('$file','$id','$newname')";
	$result=mysqli_query($con,$sql);
    $value=mysqli_insert_id($con);
    $_SESSION["myvalue"]=$value;
	
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $newname;
print "$url\n";
?>
