<?php
$routes = [
    'metadata',
    'ImportEmployees',
    'ImportPreRegistrationVisitor',
    'getAllLocationVisitors',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

