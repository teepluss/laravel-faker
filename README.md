faker-laravel-bundle
=====================

A Laravel 3.x Bundle for the Faker

## Installation

Flatten installs just like any other Laravel bundle

    php artisan bundle:install faker

Add the following to your bundles.php file if you want to autoload with every request:

    'faker' => array('auto' => true),

## Usage

```php
<?php

Bundle::start('faker');

// use the factory to create a Faker\Generator
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;

// 'Lucy Cechtelar';
echo $faker->address;

// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $faker->text;
```


See https://github.com/fzaninotto/Faker for more details on using Faker.