<?php

namespace Xbigdaddyx\Approvaly;

use Illuminate\Support\ServiceProvider;

class ApprovalyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'xbigdaddyx');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'xbigdaddyx');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/approvaly.php', 'approvaly');

        // Register the service the package provides.
        $this->app->singleton('approvaly', function ($app) {
            return new Approvaly;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['approvaly'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/approvaly.php' => config_path('approvaly.php'),
        ], 'approvaly.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/xbigdaddyx'),
        ], 'approvaly.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/xbigdaddyx'),
        ], 'approvaly.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/xbigdaddyx'),
        ], 'approvaly.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
