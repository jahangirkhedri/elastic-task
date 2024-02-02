<?php

namespace Module\Notification\contracts;

interface NotificationDriverInterface
{
    public function send($to, $message);
}
