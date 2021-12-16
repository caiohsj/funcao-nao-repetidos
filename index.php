<?php

$numbers = [];
for($i = 0; $i < 20; $i++) {
    $numbers[] = rand(1, 10);
}

$drawnNumbers = '';
foreach($numbers as $key => $number) {
    $drawnNumbers .= $number;
    if ($key < count($numbers) - 1) {
        $drawnNumbers .= ',';
    }
}

echo 'Array sorteado = ['.$drawnNumbers.']';

echo '<br>';

$numbersGroup = [];

foreach($numbers as $key => $currentNumber) {
    foreach($numbers as $number) {
        if ($currentNumber == $number) {
            $numbersGroup[$number] += 1;
        }
    }
}

$numbersNotRepeated = '';
$message = 'Os números que não se repetem são o ';
foreach($numbersGroup as $key => $count) {
    if ($count  == 1) {
        $numbersNotRepeated .= $key . ',';
    }
}

echo $message . $numbersNotRepeated;