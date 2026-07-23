<?php

// Set writable paths for Vercel Serverless Environment
putenv('APP_STORAGE=/tmp');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('APP_KEY=base64:A/iMieirkgJT1RejAqGvTqYnDBgKoe79XJidjhL8n40=');
putenv('APP_DEBUG=true');

$_ENV['APP_STORAGE'] = '/tmp';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['APP_KEY'] = 'base64:A/iMieirkgJT1RejAqGvTqYnDBgKoe79XJidjhL8n40=';

// Create writable storage structure inside Vercel /tmp directory
$dirs = [
    '/tmp/framework/views',
    '/tmp/framework/sessions',
    '/tmp/framework/cache',
    '/tmp/logs'
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

require __DIR__ . '/../public/index.php';
