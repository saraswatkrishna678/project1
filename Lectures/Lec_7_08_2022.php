<?php
//$num=0;
echo "<table style=' border-collapse: collapse'>";
for ($i=0;$i<10;$i++){
    echo "<tr>";
    for($k=0; $k <=$i ; $k++){
//        if($i==0)  echo " <td style='border: 2px dashed aqua'><b>".$i.""."$num</b></td>";
//        else
//            echo " <td style='border: 2px dashed aqua'><b>$num</b></td>";
//        $num++;
        echo " <td style='border: 2px dashed aqua'><b>".$i.""."$k</b></td>";
    }echo '</tr>';
}echo '</table>'



?>

