# Carbon Helper

[![Latest Stable Version](https://img.shields.io/packagist/v/reedware/carbon-helper.svg?style=flat-square)](https://packagist.org/packages/reedware/carbon-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/reedware/carbon-helper.svg?style=flat-square)](https://packagist.org/packages/reedware/carbon-helper)

Adds a global helper method to create Carbon instances. See [http://carbon.nesbot.com](http://carbon.nesbot.com) for how to use Carbon.

```php
carbon('2019-07-23 14:51'); // Equivalent to \Carbon\Carbon::parse('2019-07-23 14:51');
```

[Get supported nesbot/carbon with the Tidelift Subscription](https://tidelift.com/subscription/pkg/packagist-nesbot-carbon?utm_source=packagist-nesbot-carbon&utm_medium=referral&utm_campaign=readme)

## Installation (Using Composer)

Run the following command:


```
$ composer require reedware/carbon-helper
```

Or manually require this package:

```json
{
    "require": {
        "reedware/carbon-helper": "^1.0"
    }
}
```

Then make sure composer is loaded, and get going!

```php
<?php
require 'vendor/autoload.php';

printf("Now: %s", carbon());
```