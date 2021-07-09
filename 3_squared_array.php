<?php
$square = function(int $number): int {
    return $number * $number;
};

$numbers = [1, 3, 11, 9, 6, 15, 10, 25];

$newNumbers = [];

//for($i = 0, $max = count($numbers); $i < $max; $newNumbers[] = $square($numbers[$i++]));

foreach($numbers as $number) {
    $newNumbers[] = $square($number);
}

print_r($newNumbers);
?>