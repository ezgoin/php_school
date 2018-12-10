<?php

$params = getopt("u:");

if ($params['u']) {
    $url = $params['u'];
} else {
    $url = $params['url'];
}

$parsed = parse_url($url);
$host_elements = explode(".", $parsed['host']);
$n = count($host_elements);

if ($n>=2){
    if ($n==4 || ($n==3 && strlen($host_elements[($n-2)])<=3)){
        $parsed['domain'] = $host_elements[($n-3)].".".$host_elements[($n-2)].".".$host_elements[($n-1)];
        $parsed['tld'] = $host_elements[($n-2)].".".$host_elements[($n-1)]; //top-level domain
        $parsed['subdomain'] = $n==4? $host_elements[0]: ($n==3 && strlen($host_elements[($n-2)])<=3)? $host_elements[0]: '';
    } else {
        $parsed['domain'] = $host_elements[($n-2)].".".$host_elements[($n-1)];
        $parsed['tld'] = $host_elements[($n-1)];
        $parsed['subdomain'] = $n==3? $host_elements[0]: '';
    }
}

foreach ($parsed as $key => $value) {
    echo $key . ': ' . $value . PHP_EOL;
}
