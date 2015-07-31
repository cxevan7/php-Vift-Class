# php-Vift-Class
A class to use the Vift API for Video Gift Messages

To use this you have 4 basic functions, the post which creates the order, get retrieves the order, put updates the order, and delete, obviously deletes the order.

## Usage:

### Post
```php
$vift = new Vift($order_id);
$vift->name = 'Customer Name';
$vift->email = 'Customer Email';

$vift->price = 2.95; //Whatever you charged the customer for Vift.

var_dump($vift->post());
```

### Get
```php
$vift = new Vift($order_id);

var_dump($vift->get());
```

### Put
```php
$vift = new Vift($order_id);
$vift->carrier = 'USPS';
$vift->tracking_number = '1234567';

var_dump($vift->get());
```

### Delete
```php
$vift = new Vift($order_id);

var_dump($vift->delete());
```
