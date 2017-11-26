# PHP-File-Cache
Light, simple and standalone PHP in-file caching class

### Advantages
- Light, standalone and simple
- All code in one file - no pointless drivers.
- Secure - every generated cache file have a php header with `die`, making direct access impossible even if someone knows the path and your server is not configured properly
- Well documented and tested
- Supports PHP 5.4.0 - 7.1+
- Free under a MIT license

### Requirements and Installation
You need PHP 5.4.0+ for usage and PHP 5.6+ for development (PHPUnit)

Until I publish it on packagist, you can simply copy and paste `src/PhpFileCache.php` file into your project and `require_once` it.

### Usage
```php
<?php
use Wruczek\PhpFileCache\PhpFileCache;
require_once __DIR__ . "/vendor/autoload.php"; // path to PhpFileCache.php for now

$cache = new PhpFileCache();

$data = $cache->refreshIfExpired("simple-cache-test", function () {
    return date("H:i:s"); // return data to be cached
}, 10);

echo "Latest cache save: $data";
```
See [examples](https://github.com/Wruczek/PHP-File-Cache/examples) for more
