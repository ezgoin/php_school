<?php
$a = $argv[1];
$b = $a - 1;

for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        echo '   ';
    }

    for ($j = 0; $j < ($a - $b); $j++) {
        echo ' *    ';
    }

    echo PHP_EOL;
    $b--;
}

$b = 1;
for ($i = $a; $i >= 0; $i--) {
    for ($j = 0; $j < $b; $j++) {
        echo '   ';
    }

    for ($j = 0; $j < ($a - $b); $j++) {
        echo ' *    ';

    }
    $b++;
    echo PHP_EOL;

}

