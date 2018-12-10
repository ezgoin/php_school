<?php

$amount = 2750;
$notes[500] = 0;
$notes[200] = 0;
$notes[100] = 0;
$notes[50] = 0;

while ($amount >= 500) {
    $amount -= 500;
    $notes[500]++;
}

while ($amount >= 200) {
    $amount -= 200;
    $notes[200]++;
}

while ($amount >= 100) {
    $amount -= 100;
    $notes[100]++;
}

while ($amount >= 50) {
    $amount -= 50;
    $notes[50]++;
}

print_r($notes);