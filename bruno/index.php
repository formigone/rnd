<?php

function mult($num1, $num2)
{
    return $num1 * $num2;
}

function adc($num1, $num2)
{
    return $num1 + $num2;
}

$num1 = (int)$argv[1];
$num2 = (int)$argv[2];

$total = mult($num1, $num2);
echo $total, "\n";

$total2 = adc($num1, $num2);

echo $total2, "\n";

    if ($total < $total2) {
        echo "total e maior";

    }

    else {
        echo "...";
    }