<?php

declare(strict_types=1);

namespace App\Domain\ValueObjects;

final class Cellphone
{
    private string $cellphone;

    public function __construct(string $cellphone)
    {
        if (!$this->validate($cellphone)) {
            throw new \InvalidArgumentException(`${$cellphone} is not a valid cellphone number`);
        }
        $this->cellphone = $cellphone;
    }

    private function validate (string $cellphone): bool
    {
        $regex = '/^\s*(\d{2}|\d{0})[-. ]?(\d{5}|\d{4})[-. ]?(\d{4})[-. ]?\s*$/';

        if (preg_match($regex, $cellphone)) {
            return true;
        }
        return false;
    }

    public function __toString(): string
    {
        return $this->cellphone;
    }
}