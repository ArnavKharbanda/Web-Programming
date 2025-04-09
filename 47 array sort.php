<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
echo "Program by Arnav Kharbanda,2220100249"
?>

</body>
</html>