<?php
$items = [
   [
    "desc" => "ITEM 1",
      "qty" => 2,
     "amt" => 100
       ],
 [
     "desc" => "ITEM 2",
      "qty" => 7,
      "amt" => 35
    ],
      [
        "desc" => "ITEM 3",
        "qty" => 1,
        "amt" => 350
    ],
  [
     "desc" => "ITEM 4",
      "qty" => 2,
      "amt" => 20
    ]
];
$overallTotal = 0;

echo "QTY DESC AMT TOTAL\n";
echo "----------------------------------\n";

 foreach($items as $item) {

  $total = $item["qty"] * $item["amt"];
  $overallTotal += $total;

   echo "(" . $item["qty"] . ") ";
echo $item["desc"] . "     ";
   echo $item["amt"] . "     ";
   echo $total . "\n";
    }

echo "----------------------------------\n";
echo "Overall Total: Php " .$overallTotal;
?>