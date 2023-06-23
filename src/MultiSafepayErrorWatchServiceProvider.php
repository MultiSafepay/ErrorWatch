<?php

namespace MultiSafepayErrorWatch\MultiSafepayErrorWatch;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MultiSafepayErrorWatch\MultiSafepayErrorWatch\Commands\MultiSafepayErrorWatchCommand;
use function Sodium\add;

class MultiSafepayErrorWatchServiceProvider extends PackageServiceProvider
{

    public function boot(): void
    {
        //Load Custom routes into laravel
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function configurePackage(Package $package): void
    {
        //Publish the required files
        $this->publishes([
            //Config
            __DIR__.'/../config/errorwatch.php' => config_path('errorwatch.php'),
            //Images
            __DIR__.'/../resources/images/warring-icon.svg' => public_path('images/error-watch/warring-icon.svg'),
            //Blades
            __DIR__.'/../resources/views/base.blade.php' => resource_path('views/error-watch/base.blade.php'),
            __DIR__.'/../resources/views/dashboard.blade.php' => resource_path('views/error-watch/dashboard.blade.php'),
        ], 'modular-middleware');

        $package->name('error-watch');
    }
}
