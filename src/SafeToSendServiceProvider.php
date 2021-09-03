<?php

namespace Frc\SafeToSend;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Frc\SafeToSend\Commands\SafeToSendCommand;

class SafeToSendServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('safe-to-send')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_safe-to-send_table')
            ->hasCommand(SafeToSendCommand::class);
    }
}
