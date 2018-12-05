<?php

$server = $_SERVER;
print_r($server);

foreach ( $server as $key => $value) {
    echo "{$key}: {$value}";
    PHP_EOL;
    PHP_EOL;
}
