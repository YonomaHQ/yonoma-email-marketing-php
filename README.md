# Yonoma Email Marketing PHP SDK

The official PHP client library for the Yonoma Email Marketing API

## Installation

Install via Packagist
```
composer require yonoma/email-marketing
```

Or add the following to `composer.json`
```
{
  "require": {
    "yonoma/email-marketing": "*"
  }
}
```

## Quick Start

### Note : This SDK requires PHP 7.4 or above.

```php
require_once('/YonomaEmailMarketing/vendor/autoload.php');

$yonoma = new YonomaEmailMarketing\ApiClient('YOUR-API-KEY');
```
