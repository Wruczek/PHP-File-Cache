# PHP-File-Cache [![Latest Stable Version](https://poser.pugx.org/wruczek/php-file-cache/version)](https://packagist.org/packages/wruczek/php-file-cache) [![Latest Unstable Version](https://poser.pugx.org/wruczek/php-file-cache/v/unstable)](//packagist.org/packages/wruczek/php-file-cache) [![License](https://poser.pugx.org/wruczek/php-file-cache/license)](https://packagist.org/packages/wruczek/php-file-cache)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FWruczek%2FPHP-File-Cache.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2FWruczek%2FPHP-File-Cache?ref=badge_shield)
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


## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FWruczek%2FPHP-File-Cache.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FWruczek%2FPHP-File-Cache?ref=badge_large)