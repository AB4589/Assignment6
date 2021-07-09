<?php
$array = range(1, 100);

function paginate(int $offset, int $perPage): array 
{
    global $array;
    
    return array_slice($array, $offset, $perPage);
}

$page = 3;
$noOfItems = 10;
$offset = $noOfItems * ($page - 1);
print_r(paginate($offset, $noOfItems));
?>