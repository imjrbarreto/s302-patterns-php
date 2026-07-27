<?php declare(strict_types=1);

require_once __DIR__ . '/Wallet.php';
require_once __DIR__ . '/HouseKeys.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/CarKeys.php';
require_once __DIR__ . '/MotorcycleKeys.php';
require_once __DIR__ . '/PublicTransportCard.php';
require_once __DIR__ . '/Person.php';

$wallet = new Wallet();
$houseKeys = new HouseKeys();
$smartphone = new Smartphone();
$carKeys = new CarKeys();
$motorcycleKeys = new MotorcycleKeys();
$publicTransportCard = new PublicTransportCard();


$person1 = new Person("Maria", $wallet, $houseKeys, $smartphone, $carKeys);
$person1->leaveHome();
echo PHP_EOL;

$person2 = new Person("Ana", $wallet, $houseKeys, $smartphone, $publicTransportCard);
$person2->leaveHome();
echo PHP_EOL;

$person3 = new Person("Juan", $wallet, $houseKeys, $smartphone, $motorcycleKeys);
$person3->leaveHome();
echo PHP_EOL;
