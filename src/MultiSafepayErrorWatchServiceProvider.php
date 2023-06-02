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
            __DIR__.'/../config/template.php' => config_path('template.php'),
            //Blades
            __DIR__.'/../resources/views/preference.blade.php' => resource_path('views/template/preference.blade.php'),
        ], 'modular-middleware');

        $package->name('modular-middleware-error-watch');
    }
}
