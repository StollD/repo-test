<?php

$prefix = 'https://github.com/linux-surface/linux-surface/releases/download';
$file = getcwd() . $_GET['q'] . '.blob';

if (!file_exists($file)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    die();
}

$url = $prefix . '/' . file_get_contents($file);
header("Location: $url", true, 301);

?>
