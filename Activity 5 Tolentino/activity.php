<?php

function printItem($qty, $desc, $amt)
{
    $total = $qty * $amt;

    echo "(" . $qty . ") " . $desc . "\t";
    echo $amt . "\t";
    echo $total . "\n";

    return $total;
}

echo "QTY  DESC    AMT   Total\n";
echo "-----------------------------\n";

$overall = 0;

$overall += printItem(2, "ITEM 1", 100);
$overall += printItem(7, "ITEM 2", 35);
$overall += printItem(1, "ITEM 3", 350);
$overall += printItem(2, "ITEM 4", 20);

echo "-----------------------------\n";
echo "Overall Total Php " . $overall;

?>