<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$mini=$num1>$num2 ? $num1:$num1;
$mini=$mini>$num3 ? $num3:$mini;
echo $mini;
 ?>
