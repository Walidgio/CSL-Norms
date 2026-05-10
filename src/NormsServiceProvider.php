<?php

namespace CivilSoftLab\Norms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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

        // Load Routes
        $this->registerRoutes();

        // Optional: Publish Assets
        if ($this->app->runningInConsole()) {        // Publish assets
        $this->publishes([
            __DIR__ . '/../assets/norms' => public_path('assets/norms'),
        ], 'norms-assets');
        }
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
