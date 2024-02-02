<?php

namespace Module\Notification\Drivers;

use Illuminate\Support\Manager;

class NotificationSender extends Manager
{

    public function getDefaultDriver()
    {
        return config('notification.default_driver');
    }

    public function createMailDriver()
    {
        return new Mail();
    }
    public function createSmsDriver()
    {
        return new Sms();
    }

    // you can add another driver
}
