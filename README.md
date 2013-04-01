faker-laravel-bundle
=====================

A Laravel 3.x Bundle for the Faker

Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.

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
$faker = Faker::make('en_US');

// generate data by accessing properties
echo $faker->name;

// 'Lucy Cechtelar';
echo $faker->address;

// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $faker->text;

```


See https://github.com/fzaninotto/Faker for more details on using Faker.