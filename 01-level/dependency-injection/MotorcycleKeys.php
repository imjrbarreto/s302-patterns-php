<?php declare(strict_types=1);

require_once __DIR__ . '/TransportAccess.php';

class MotorcycleKeys implements TransportAccess {
  public function take(): string {
    return "Motorcycle Keys Saved.";
  }
}