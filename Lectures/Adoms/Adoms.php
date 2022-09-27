<?php
$num=$_POST['num'];
function adoms(int $num1){
 $square=$num1**2;
 strrev($square);
 $root=sqrt($square);
 if($root==$num1) return "Adom number";
 else return" Not";
}
print adoms($num);

 ?>
