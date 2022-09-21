<?php
echo '<table style="border-collapse: collapse;border: 2px solid">';
for ($i=1;$i<=10;$i++){
    echo '<tr style="background-color: chartreuse;border-collapse: collapse;border: 2px solid;">';
    for ($k=1;$k<=10;$k++)
        echo '<td style="border-collapse: collapse;border: 2px solid;text-align: center">'."$i"."*"."$k"." = ".$i*$k.'</td>';
    echo '</tr>';
}
echo '</table>';
?>
