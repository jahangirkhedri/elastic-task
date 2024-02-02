<?php

namespace Module\Alarm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Module\Alarm\contracts\AlarmServiceInterface;

class AlarmController extends Controller
{
    public function __construct(private AlarmServiceInterface $alarmService)
    {
    }

    public function store(Request $request)
    {
        $this->alarmService->store($request->all());
    }
}
