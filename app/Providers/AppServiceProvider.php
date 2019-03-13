<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Queue;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extendImplicit('alpha_spaces', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\pL\s]+$/u', $value);
        });

        Validator::extendImplicit('only_digits', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\d]+$/u', $value);
        });

        Queue::after(function (JobProcessed $event) {
            Log::debug($event->connectionName);
            // $event->connectionName
            // $event->job
            // $event->job->payload()
        });

    }
}
