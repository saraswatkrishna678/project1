<?php
$i=0;
$num="082707";
$arr= str_split($num,2);
foreach ($arr as $val){
    if($i==0) print  $val;
    else print ":".$val;
    $i++;
}
?>
