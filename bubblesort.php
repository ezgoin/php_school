<?php

$arr = [
3, 5, 7, 2, 6, 8, 1, 9
];

function bubblesort($a) {
    if (gettype($a) == "array") {
        $length = count($a);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $length - 1; $j > $i; $j--) {
                if ($a[$j] < $a[$j-1]) {
                    $x = $a[$j];
                    $a[$j] = $a[$j - 1];
                    $a[$j - 1] = $x;
                }
            }
        }
        return $a;
    } else {
        echo "Given variable is not an array";
    }
}

print_r(bubblesort($arr));
