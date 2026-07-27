<?php declare(strict_types = 1);

interface TransportAccess {
  public function take(): string;
}