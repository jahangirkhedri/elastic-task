<?php

namespace Module\Notification\Drivers;

use Module\Notification\contracts\NotificationDriverInterface;

class Mail implements NotificationDriverInterface
{

    public function send($to, $message)
    {
        //send mail
    }
}
