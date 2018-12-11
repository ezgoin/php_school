<?php

$params = getopt("a:");
$amount = $params["a"];

$notes[500] = 0;
$notes[200] = 0;
$notes[100] = 0;
$notes[50] = 0;

if ($amount > 0 && $amount < 100000 && ($amount % 50 === 0)) {
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

    foreach ($notes as $key => $value) {
        if ($value !== 0) {
            echo "$key: $value " . PHP_EOL;
        }
    }
} else {

    echo "Error: incorrect amount. The following notes are available: 50, 100, 200, 500" . PHP_EOL;
}

