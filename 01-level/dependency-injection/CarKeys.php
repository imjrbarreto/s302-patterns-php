<?php declare(strict_types=1);

require_once __DIR__ . '/TransportAccess.php';

class CarKeys implements TransportAccess {
  public function take(): string {
    return "Car Keys Saved.";
  }
}