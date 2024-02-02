<?php

namespace Module\Alarm;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Module\Alarm\contracts\AlarmServiceInterface;
use Module\Alarm\Services\AlarmService;

class AlarmServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        App::bind(AlarmServiceInterface::class,AlarmService::class);
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
