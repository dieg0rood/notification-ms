<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Email;

final class EmailNotification
{
    private Email $to;
    private array $cc = [];
    private array $bcc = [];
    private string $subject;
    private string $body;

    public function getTo(): Email
    {
        return $this->to;
    }

    public function setTo(Email $to): EmailNotification
    {
        $this->to = $to;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): EmailNotification
    {
        $this->body = $body;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): EmailNotification
    {
        $this->subject = $subject;
        return $this;
    }

    public function getBcc(): array
    {
        return $this->bcc;
    }

    public function setBcc(array $bcc): EmailNotification
    {
        $emailsArray = [];
        foreach($bcc as $email) {
            $emailsArray[] = new Email($email);
        }
        $this->bcc = $emailsArray;

        return $this;
    }

    public function getCc(): array
    {
        return $this->cc;
    }

    public function setCc(array $cc): EmailNotification
    {
        $emailsArray = [];
        foreach($cc as $email) {
            $emailsArray[] = new Email($email);
        }
        $this->cc = $emailsArray;

        return $this;
    }
}