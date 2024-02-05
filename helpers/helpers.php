<?php

use Module\Notification\Drivers\NotificationSender;

function notification()
{
    return app(NotificationSender::class);
}
