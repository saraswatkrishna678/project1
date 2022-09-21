<?php
/********
------Decision making------
 *
 * PHP***
 *      console application and web applications


 ***********/
$num1=300;
switch ($num1>=48&&$num1<=57){
    case 1:echo " numeric charactor"; break;
    case 0:switch ($num1>=65&&$num1<=90) {
        case 1:
            echo "Uppercase Alphabates";
            break;
        case 0:switch ($num1>=97&&$num1<=122){
            case 1: echo "Lowercase alphabates"; break;
            case 0: switch ($num1<=255){
                case 1:echo "Special Charactor"; break;
                case 0:echo "Please enter the number in range"; break;
            }
        }

    }
}


?>
