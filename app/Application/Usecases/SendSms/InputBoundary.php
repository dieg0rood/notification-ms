<?php

declare(strict_types=1);

namespace App\Application\Usecases\SendSms;

class InputBoundary
{
    private string $cellphone;
    private string $body;

    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}