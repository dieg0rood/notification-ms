<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

use App\Application\Enum\TargetDevicesEnum;

final class Device
{
    private string $device;

    public function __construct(string $device)
    {
        if (TargetDevicesEnum::tryFrom($device) === null) {
            throw new \InvalidArgumentException(`${device} is not a valid device`);
        }
        $this->device = $device;
    }

    public function __toString(): string
    {
        return $this->device;
    }
}