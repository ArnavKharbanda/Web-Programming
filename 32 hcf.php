<?php
$num1 = 48;
$num2 = 18;

while ($num1 != $num2) {
    if ($num1 > $num2) {
        $num1 -= $num2;
    } else {
        $num2 -= $num1;
    }
}
echo "The HCF is: $num1";
echo "<br>";
echo "Program by Arnav Kharbanda,2220100249"
?>