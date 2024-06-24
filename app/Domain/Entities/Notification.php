<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Device;
use DateTimeInterface;

final class Notification
{
    private string $userId;
    private EmailNotification | SmsNotification | array $notification;
    private Device $device;
    private DateTimeInterface $createdAt;

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): Notification
    {
        $this->userId = $userId;
        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): Notification
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getDevice(): Device
    {
        return $this->device;
    }

    public function setDevice(Device $device): Notification
    {
        $this->device = $device;
        return $this;
    }

    public function getNotification(): SmsNotification | EmailNotification
    {
        return $this->notification;
    }

    public function setNotification(array $notification): Notification
    {
        $this->notification = $notification;
        return $this;
    }
}