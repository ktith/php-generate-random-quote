# PHP Generate Random Quote

## Installation

### Library

```bash
git clone https://github.com/justinrainbow/json-schema.git
```

### Composer

[Install PHP Composer](https://getcomposer.org/doc/00-intro.md)

```bash
composer require justinrainbow/json-schema
```

## Usage

Simple used as generate random qoute.

__Note:__ This noted message.

### Basic usage

```php
<?php

include_once('vendor/autoload.php');

$quotes = new RandomQuotes\RandomQuotes();

print_r($quotes->generate());

```
