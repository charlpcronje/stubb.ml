<?php
return (object)[
    'url'      => parse_url($url),
    'scheme'   => parse_url($url, PHP_URL_SCHEME),
    'user'     => parse_url($url, PHP_URL_USER),
    'pass'     => parse_url($url, PHP_URL_PASS),
    'host'     => parse_url($url, PHP_URL_HOST),
    'port'     => parse_url($url, PHP_URL_PORT),
    'path'     => parse_url($url, PHP_URL_PATH),
    'query'    => parse_url($url, PHP_URL_QUERY),
    'fragment' => parse_url($url, PHP_URL_FRAGMENT)
];
