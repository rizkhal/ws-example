<?php

namespace App\Providers;

use App\Models\User;
use App\Events\UserCreated;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // User::created(function (User $model) {
        //     UserCreated::dispatch($model);
        // });
    }
}
