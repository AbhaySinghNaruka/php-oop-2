<?php

include_once __DIR__ . '/products.php';
include_once __DIR__ . '/user.php';
include_once __DIR__ . '/creditCard.php';

$spazzola = new products('Spazzola', 'Accessori', '3,50€', 'Cani');
$collare = new products('Collare', 'Accessori', '2,50€', 'Cani & Gatti');
$acquario = new products('Acquario', 'Marine', '50€', 'Pesci');

var_dump($spazzola);
var_dump($collare);
var_dump($acquario);

$creditCard = new creditCard('**** **** **** ****', ewrew, 'ciao');

$user = new User('Elon Musk', 'elonmusk@tesla.com', true, $creditCard);
var_dump($user);
