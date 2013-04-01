<?php

Autoloader::namespaces(array(
	'Faker' => Bundle::path('faker') . 'src' . DS . 'Faker'
));

Autoloader::map(array(
	'Faker' => Bundle::path('faker') . 'src' . DS . 'faker.php'
));