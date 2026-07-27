<?php

class Person {
  private string $name;
  private Wallet $wallet;
  private HouseKeys $houseKeys;
  private Smartphone $smartphone;
  private TransportAccess $transportAccess;

  public function __construct(string $name, Wallet $wallet, HouseKeys $houseKeys, Smartphone $smartphone, TransportAccess $transportAccess) {
    $this->name = $name;
    $this->wallet = $wallet;
    $this->houseKeys = $houseKeys;
    $this->smartphone = $smartphone;
    $this->transportAccess = $transportAccess;
  }

  public function leaveHome(): void {
    echo $this->name . " is getting ready..." . PHP_EOL;
    echo $this->wallet->take() . PHP_EOL;
    echo $this->houseKeys->take() . PHP_EOL;
    echo $this->smartphone->take() . PHP_EOL;
    echo $this->transportAccess->take() . PHP_EOL;

    echo "Ready!!." . PHP_EOL;
  }
}