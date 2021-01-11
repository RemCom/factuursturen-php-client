![CI](https://github.com/Ultiweb-nl/factuursturen-php-client/workflows/CI/badge.svg)

# factuursturen-php-client


An unofficial client for the Factuursturen/DigiRechnung API.

## Installation
This project can easily be installed through Composer.

```
composer require ultiweb-nl//factuursturen-php-client
```

## Set-up connection
Prepare the client for connecting to Sendcloud with your API key and API secret. (Optionally you can send your Partner id as 3rd param.)
```php
$factuurSturen = new \UltiwebNL\FactuurSturenPhpClient\FactuurSturen();
$factuurSturen->setUsername($username);
$factuurSturen->setPassword($password);
```

## Get all invoices
Returns an array of Parcel objects
```php
$invoices = $factuurSturen->invoices()->all();
```

## Get a single invoice
Returns a Parcel object
```php
$invoice = $factuurSturen->invoices()->find(1234);
```

## Create a new invoice
```php
$invoice = $factuurSturen->invoices();

$invoice->company_name = 'Company name';

$invoice->save();
```