<?php

namespace App\Application\Enum;

enum TargetDevicesEnum: string
{
    case MAIL_DEVICE = 'mail';
    case SMS_DEVICE = 'sms';
    case ALL_DEVICES = 'all';

}
