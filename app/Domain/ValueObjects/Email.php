<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

final class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(`${$email} is not a valid email address`);
        }
        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}