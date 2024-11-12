Given we have `config/someconf.php`:

```php
    // 'missing_key' => ,
    'empty_value' => '',
```

```php
configErr('someconf.missing_key'); // throws exception
configErr('someconf.empty_value'); // throws exception
configErr('someconf.empty_value', throwOnEmpty = false); // no empty value exception
```

## Installation

```
composer require amirhossein5/config-err
```
