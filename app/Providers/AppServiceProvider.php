<?php

namespace App\Providers;

use App\Repositories\SystemUserRepository;
use App\Repositories\SystemUserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SystemUserRepositoryInterface::class, SystemUserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}
