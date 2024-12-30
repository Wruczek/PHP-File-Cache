# Deprecation notice
This project is not in active development. Issues remain with cache files sometimes being saved with invalid data and unable to be read (see: [issue #3](https://github.com/Wruczek/PHP-File-Cache/issues/3) and [#4](https://github.com/Wruczek/PHP-File-Cache/issues/4)). The API is confusing and a rewrite would be necessary (for example renaming "retrive" function to "get", "store" to "set" etc.).

# PHP-File-Cache [![Latest Stable Version](https://poser.pugx.org/wruczek/php-file-cache/version)](https://packagist.org/packages/wruczek/php-file-cache) [![Latest Unstable Version](https://poser.pugx.org/wruczek/php-file-cache/v/unstable)](//packagist.org/packages/wruczek/php-file-cache) [![License](https://poser.pugx.org/wruczek/php-file-cache/license)](https://packagist.org/packages/wruczek/php-file-cache)
Light, simple and standalone PHP in-file caching class

### Advantages
- Light, standalone and simple
- All code in one file - no pointless drivers.
- Secure - every generated cache file have a php header with `die`, making direct access impossible even if someone knows the path and your server is not configured properly
- Well documented and tested
- Handles concurrency correctly via flock
- Supports PHP 5.4.0 - 7.1+
- Free under a MIT license

### Requirements and Installation
You need PHP 5.4.0+ for usage and PHP 5.6+ for development (PHPUnit)

Require with composer:<br>
`composer require wruczek/php-file-cache`

### Usage
```php
<?php
use Wruczek\PhpFileCache\PhpFileCache;
require_once __DIR__ . "/vendor/autoload.php";

$cache = new PhpFileCache();

$data = $cache->refreshIfExpired("simple-cache-test", function () {
    return date("H:i:s"); // return data to be cached
}, 10);

echo "Latest cache save: $data";
```
See [examples](https://github.com/Wruczek/PHP-File-Cache/tree/master/examples) for more
