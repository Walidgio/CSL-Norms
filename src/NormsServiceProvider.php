<?php

namespace CivilSoftLab\Norms;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class NormsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'norms');

        Blade::component('norms::components.icon', 'icon');

        // Load Routes
        $this->registerRoutes();

        $this->publishes([
            __DIR__ . '/../assets/norms' => public_path('assets/norms'),
        ], 'norms-assets');
    }

    /**
     * Register the package routes.
     */
    protected function registerRoutes(): void
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    /**
     * Get the route group configuration array.
     */
    protected function routeConfiguration(): array
    {
        return [
            'middleware' => ['web'], // Apply web middleware for sessions, CSRF, etc.
        ];
    }
}
