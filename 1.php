<?php

$numbers = $_SERVER['argv'][1];
$numbersLength = mb_strlen($numbers);
$sum = 0;

for ($i = 0; $i < $numbersLength; $i++) {
    if ($numbers[$i] === $numbers[($i + 1) % $numbersLength]) {
        $sum += $numbers[$i];
    }
};

echo $sum;