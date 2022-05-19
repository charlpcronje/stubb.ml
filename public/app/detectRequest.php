<?php
return (object)[
    'post'    => $_POST    ?? (object)[],
    'get'     => $_GET     ?? (object)[],
    'put'     => $_PUT     ?? (object)[],
    'delete'  => $_DELETE  ?? (object)[],
    'request' => $_REQUEST ?? (object)[]
];