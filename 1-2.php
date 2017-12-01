<?php

$numbers = $_SERVER['argv'][1];
$numbersHalfLength = mb_strlen($numbers) / 2;
$sum = 0;

for ($i = 0; $i < $numbersHalfLength; $i++) {
    if ($numbers[$i] === $numbers[$numbersHalfLength + $i]) {
        $sum += $numbers[$i] * 2;
    }
};

echo $sum;