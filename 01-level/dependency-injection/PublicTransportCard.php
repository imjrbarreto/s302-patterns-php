<?php declare(strict_types=1);

require_once __DIR__ . '/TransportAccess.php';

class PublicTransportCard implements TransportAccess {
  public function take(): string {
    return "Public Transport Card Saved.";
  }
}