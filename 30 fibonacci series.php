<?php
$terms = 10;
$first = 0;
$second = 1;

echo "Fibonacci series: ";
for ($i = 1; $i <= $terms; $i++) {
    echo $first . " ";
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
echo "<br>";
echo "Program by Arnav Kharbanda,2220100249"
?>