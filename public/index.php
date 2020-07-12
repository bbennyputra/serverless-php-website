<?php
/**
 * Simple PHP Routing File for Lambda. Just for demo purpose.
 *
 * Run local web server with command.
 *
 * $ php -S 0.0.0.0:8080 -t public/ public/index.php
 */
define('ROOT_DIR', realpath(__DIR__ . '/../'));

// Only allow alphanumerics, slash, dash and underscore
$file = preg_replace('/[^0-9a-z\-_\/]/i', '', $_SERVER['REQUEST_URI']);
// Remove multi slash
$file = preg_replace('#/+#', '/', $file);
if ($file === '/') {
    $file = '/index';
}

// Remove leading slash
$file = ltrim($file, '/');
$fullPath = ROOT_DIR . '/src/' . $file . '.php';

if (! file_exists($fullPath)) {
    echo "<h1>404 Not Found";
    exit(1);
}

require $fullPath;