![stability-wip](https://img.shields.io/badge/stability-work_in_progress-lightgrey.svg) ![Unit Tests](https://github.com/Ultiweb-nl/factuursturen-php-client/workflows/Unit%20Tests/badge.svg) [![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/Ultiweb-nl/factuursturen-php-client/blob/master/LICENSE) [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)

# factuursturen-php-client


An unofficial client for the Factuursturen/DigiRechnung API.

## Installation
This project can easily be installed through Composer.

```
composer require ultiweb-nl/factuursturen-php-client
```

## Set-up connection
Prepare the client for connecting to FactuurSturen with your API key and API secret. (Optionally you can send your Partner id as 3rd param.)
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

## Supported endpoints

- Categories
- Profiles




--------------
- Clients 
- Products
- Invoices
- Quotation
  
## Not (yet) supported endpoints (feel free to contribute)
- Invoice Payment
- Invoice Reminder
- Saved Invoices
- Repeating Invoices
- Balance

-------------
- Get Invoices PDF
- Get Quotation PDF
- Country list
- Taxes
- Search