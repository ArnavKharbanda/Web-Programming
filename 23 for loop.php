<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "\t";
    }
    echo "<br>";
    /* example 2 */
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "\t";
    }
echo "<br>";
echo "Program by Arnav Kharbanda,2220100249"
?>