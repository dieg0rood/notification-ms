<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Cellphone;

final class SmsNotification
{
    private Cellphone $cellphone;
    private string $body;
    public function __construct(Cellphone $cellphone, string $body)
    {
        $this->cellphone = $cellphone;
        $this->body = $body;
    }

    public function getCellphone(): Cellphone
    {
        return $this->cellphone;
    }

    public function setCellphone(Cellphone $cellphone): SmsNotification
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): SmsNotification
    {
        $this->body = $body;
        return $this;
    }


}