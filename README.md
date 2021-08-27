# iqomp/jubelio

Genenerated jubelio API.

## Installation

```bash
composer require iqomp/jubelio
```

## Usage

You can use class `Iqomp\Jubelio\Jubelio` to work with Jubelio API.

```php
<?php

use Iqomp\Jubelio\Jubelio;

$jubelio = new Jubelio('email@host', 'account-password');

// get login token
// special method, no need to provide body
$token = $jubelio->Authentication->Login();

// get all products
// https://docs.jubelio.com/#operation/getInventoryItems
// first args is the query string
$products = $jubelio->Product->GetAllProductGroups([
    'page' => 1,
    'pageSize' => 12,
    // ...
]);

// get single product variant
// https://api.jubelio.com/inventory/items/{id}
// first argument is URL parameter.
$variant = $jublio->Product->GetProduct(1);
```

Special case for method `Authentication->Login` no need to add any argument.

Each `collection->method` function accept arguments as below:

1. URL parameter *only if* URL require some parameter.
2. Request body for PUT/POST/DELETE method. And yes, Jublio accept body for `DELETE` method. And *only if* the request expect some body.
3. Request query string *only if* action expect some query string.
