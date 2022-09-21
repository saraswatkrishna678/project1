<?php
echo "<table style='border: 2px solid;border-collapse: collapse'>";
for($row=0;$row<8;$row++){
    echo "<tr style='border: 2px solid;border-collapse: collapse'>";
    for ($col=0;$col<8;$col++){
        if(($row+$col)%2==0)
            echo '<td style="background-color: black; width: 100px;height: 100px"></td>';
        else echo '<td style="height: 100px;width: 100px"></td>';
    }
    echo '</tr>';
}

?>
