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

### Note : This SDK requires PHP version 7.4 or above.

```php
require_once('/YonomaEmailMarketing/vendor/autoload.php');

$yonoma = new YonomaEmailMarketing\ApiClient('YOUR-API-KEY');
```
## Groups
#### Create new group
```php
$response = $yonoma->groups->create([
  "group_name" => "php sdk"
]);
```
#### Get list of groups
```php
$response = $yonoma->groups->list();
```
#### Get one group
```php
$response = $yonoma->groups->retrieve('A0SADFD6PJ');
```
#### Update group
```php
$response = $yonoma->groups->update('A0SADFD6PJ',[
  "group_name" => "updated php sdk"
]);
```
#### Delete group
```php
$response = $yonoma->groups->delete('A0SADFD6PJ');
```
## Tags
#### Create new tag
```php
$response = $yonoma->tags->create([
  "tag_name" => "php sdk"
]);
```
#### Get list of tags
```php
$response = $yonoma->tags->list();
```
#### Get one tag
```php
$response = $yonoma->tags->retrieve('I0M15VL3I7');
```
#### Update tag
```php
$response = $yonoma->tags->update('I0M15VL3I7',[
        "tag_name" => "updated php sdk"
]);
```
#### Delete tag
```php
$response = $yonoma->tags->delete('I0M15VL3I7');
```
## Contacts
#### Create new contact
```php
$response = $yonoma->contacts->create("ZM8WD5SKSI", [
  "email" => "contactemail2@gmail.com",
  "status" => "Subscribed" | "Unsubscribed",
  "data" => [
      "firstName" => "Contact",
      "lastName" => "One",
      "phone" => "1234567890",
      "address" => "123, NY street",
      "city" => "NY City",
      "state" => "NY",
      "country" => "US",
      "zipcode" => "10001"
  ]
]);
```
#### Update contact
```php
$response = $yonoma->contacts->update("ZM8WD5SKSI", "GN5HSWRI44", [
  "status" => "Unsubscribed",
]);
```
#### Add tag to contact
```php
$response = $yonoma->contacts->addTag("GN5HSWRI44", [
  "tag_id" => "ITBBBM572C",
]);
```
#### Remove tag from contact
```php
$response = $yonoma->contacts->removeTag("GN5HSWRI44", [
  "tag_id" => "ITBBBM572C",
]);
```