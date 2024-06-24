<?php

declare(strict_types=1);

namespace App\Infra\Controller;

use App\Domain\Entities\Notification;
use App\Domain\ValueObjects\Device;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
final class NotificationController
{
    public RequestInterface $request;
    public ResponseInterface $response;

    public function __construct(RequestInterface $request, ResponseInterface $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function diego() {
        $notification = new Notification();
        $notification->setDevice(new Device('bla'))
            ->setCreatedAt(new \DateTimeImmutable('2024-06-21'))
            ->setMessage('blablabla');
    }

}