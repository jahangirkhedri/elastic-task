<?php

namespace Module\Elastic;

use Illuminate\Support\ServiceProvider;
use Module\Elastic\Commands\AddDataToElastic;

class ElasticDataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->commands([
            AddDataToElastic::class
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
