<?php

use Module\Notification\Drivers\NotificationSender;

function msgSender()
{
    return app(NotificationSender::class);
}
