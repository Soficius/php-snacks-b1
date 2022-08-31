<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->
<?php
$numbers = [];
while (count($numbers) < 15) {
    $random_num = rand(1, 100);
    if (!in_array($random_num, $numbers)) {
        $numbers[] = $random_num;
    }
}

var_dump($numbers);
