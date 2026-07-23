<?php

// Set writable paths & environment variables for Vercel Serverless Environment
putenv('APP_STORAGE=/tmp');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('APP_KEY=base64:A/iMieirkgJT1RejAqGvTqYnDBgKoe79XJidjhL8n40=');
putenv('APP_DEBUG=true');
putenv('LOG_CHANNEL=stderr');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=/tmp/database.sqlite');

$_ENV['APP_STORAGE'] = '/tmp';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['APP_KEY'] = 'base64:A/iMieirkgJT1RejAqGvTqYnDBgKoe79XJidjhL8n40=';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = '/tmp/database.sqlite';

// Create writable storage structure & sqlite file inside Vercel /tmp directory
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

if (!file_exists('/tmp/database.sqlite')) {
    @touch('/tmp/database.sqlite');
}

require __DIR__ . '/../public/index.php';
