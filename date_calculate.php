<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//get current month for example
$beginday=date("1996-11-6");
$lastday=date("2015-2-19");
echo"<input type='text' value='$beginday'><br><br>";
echo"<input type='text' value='$lastday'><br><br>";
$nr_work_days = getWorkingDays($beginday,$lastday);
echo $nr_work_days;

function getWorkingDays($startDate, $endDate){
 $begin=strtotime($startDate);
 $end=strtotime($endDate);
 if($begin>$end){
  echo "startdate is in the future! <br />";
  return 0;
 }else{
   $no_days=0;
   $weekends=0;
  while($begin<=$end){
    $no_days++; // no of days in the given interval
    $what_day=date("N",$begin);
     if($what_day>5) { // 6 and 7 are weekend days
          $weekends++;
     };
    $begin+=86400; // +1 day
  };
  $working_days=$no_days-$weekends;
  return $working_days;
 }
}
?>
</body>
</html>