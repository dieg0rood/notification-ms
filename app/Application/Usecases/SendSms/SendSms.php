<?php

declare(strict_types=1);

namespace App\Application\Usecases\SendSms;

use App\Domain\Repositories\FindNotificationRepositoryInterface;

final class SendSms
{
    private FindNotificationRepositoryInterface $repository;

    public function __construct(FindNotificationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(InputBoundary $inputBoundary): OutputBoundary
    {
        return new OutputBoundary();
    }
}