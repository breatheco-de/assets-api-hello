<?php
require_once('./vendor/autoload.php');

$api = new \SlimAPI\SlimAPI([
    'name' => 'This is Your API Title',
    'debug' => true
]);

$api->addReadme('/','./README.md');
$api->addRoutes(require('src/routes.php'));
$api->run();