<?php

use Wruczek\PhpFileCache\PhpFileCache;

require_once __DIR__ . "/../vendor/autoload.php";

$cache = new PhpFileCache(__DIR__ . "/../testcache/");

// Traditional procedure, without using the refreshIfExpired shortcut.
if ($cache->isExpired("simple-cache-test")) {
    $store = date("H:i:s"); // data to cache. can be any type you like
    $cache->store("simple-cache-test", $store, 10);
}

$data = $cache->retrieve("simple-cache-test");

echo "Latest cache save: $data";
