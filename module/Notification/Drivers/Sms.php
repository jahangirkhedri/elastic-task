<?php

namespace Module\Notification\Drivers;

use Module\Notification\contracts\NotificationDriverInterface;

class Sms implements NotificationDriverInterface
{
    public function send($to, $message)
    {
        //send sms
    }
}
