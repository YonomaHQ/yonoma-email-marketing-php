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
  "group_name" => "New group"
]);
```
#### Get list of groups
```php
$response = $yonoma->groups->list();
```
#### Get one group
```php
$response = $yonoma->groups->retrieve('Group id');
```
#### Update group
```php
$response = $yonoma->groups->update('A0SADFD6PJ',[
  "group_name" => "Updated group name"
]);
```
#### Delete group
```php
$response = $yonoma->groups->delete('Group id');
```
## Tags
#### Create new tag
```php
$response = $yonoma->tags->create([
  "tag_name" => "New tag"
]);
```
#### Get list of tags
```php
$response = $yonoma->tags->list();
```
#### Get one tag
```php
$response = $yonoma->tags->retrieve('Tag id');
```
#### Update tag
```php
$response = $yonoma->tags->update('Tag id',[
  "tag_name" => "Updated tag name"
]);
```
#### Delete tag
```php
$response = $yonoma->tags->delete('Tag id');
```
## Contacts
#### Create new contact
```php
$response = $yonoma->contacts->create("Group id", [
  "email" => "email@example.com",
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
$response = $yonoma->contacts->update("Group id", "Contact id", [
  "status" => "Subscribed" | "Unsubscribed",
]);
```
#### Add tag to contact
```php
$response = $yonoma->contacts->addTag("Contact id", [
  "tag_id" => "Tag id",
]);
```
#### Remove tag from contact
```php
$response = $yonoma->contacts->removeTag("Contact id", [
  "tag_id" => "Tag id",
]);
```