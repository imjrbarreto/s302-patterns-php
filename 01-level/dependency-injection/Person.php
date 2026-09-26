<?php

class Person {
  private string $name;
  private array $homeItems;

  public function __construct(string $name, Wallet $wallet, HouseKeys $houseKeys, Smartphone $smartphone, TransportAccess $transportAccess) {
    $this->name = $name;
    $this->homeItems = [$wallet, $houseKeys, $smartphone, $transportAccess];
  }

  public function leaveHome(): void {
    echo $this->name . " is getting ready..." . PHP_EOL;
    
    foreach($this->homeItems as $item) {
      echo "- " . $item->take() . PHP_EOL;
    }

    echo "Ready!!" . PHP_EOL;
  }
}