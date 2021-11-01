<?php require __DIR__ . '/data.php'; ?>

<?php

//Random index from an array
function getRandomIndex(array $anyArray): int
{
    $arrayLenght = count($anyArray);
    return rand(0, $arrayLenght - 1);
}

function percentage(int $number, int $total): float
{
    $procentsats = ($number / $total) * 100;
    return $procentsats;
}
