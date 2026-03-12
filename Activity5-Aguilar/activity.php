<?php

function printItem($quantity, $description, $amount)
{
    $total = $quantity* $amount;

    echo "(". $quantity . ") " . $description. "\t";
    echo $amount . "\t";
    echo $total . "\n";

    return $total;
}

echo "QTY  DESC    AMT   Total\n";
echo "-------------------------\n";

$total = 0;
$total += printItem(2, "ITEM 1", 100);
$total += printItem(7, "ITEM 2",  35);
$total += printItem(1, "ITEM 3", 350);
$total += printItem(2, "ITEM 4",  20);

echo "-------------------------\n";
echo "Overall Total Php " . $total;

?>
