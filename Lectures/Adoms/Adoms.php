<?php
$num=$_POST['num'];
$square=$num**2;
strrev($square);
$root=sqrt($square);
$root==$num ? echo "Adom number": echo" Not";

 ?>
