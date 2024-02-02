<?php

namespace Module\Alarm\Services;

use Module\Alarm\contracts\AlarmServiceInterface;
use Module\Alarm\Models\Alarm;

class AlarmService implements AlarmServiceInterface
{
    public function store(array $data)
    {
        Alarm::create([
            'user_id' => 1,
            'source' => $data['source']
        ]);
    }
}
