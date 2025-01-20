<?php
$array = [61, 07, 129, 50, 35, 64, 41, 37];
$largest = $array[0];
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $largest) {
        $largest = $array[$i];
    }
}
echo "The largest number is: $largest"; 
echo "<br>";
echo "Program by Arnav Kharbanda,2220100249"
?>