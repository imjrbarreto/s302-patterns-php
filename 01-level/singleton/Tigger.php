<?php declare(strict_types=1);

class Tigger {
  private static Tigger $instance;
  private static int $count = 0;

  private function __construct() {
    echo "Building character..." . PHP_EOL;
  }

  public function roar() {
    echo "Grrr!" . PHP_EOL;
    self::$count++;
  }

  public static function getInstance(): Tigger {
    if(!isset(self::$instance)) {
      self::$instance = new Tigger();
    }
    return self::$instance;
  }

  public static function getCount(): int {
    return self::$count;
  }
}