<?php declare(strict_types=1);

require_once __DIR__ . '/Tigger.php';

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

if ($tigger1 === $tigger2) {
    echo 'Equal tiggers' . PHP_EOL;
} else {
    echo 'Different tiggers' . PHP_EOL;
}

$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
$tigger2->roar();
$tigger2->roar();

echo Tigger::getCount() . PHP_EOL;