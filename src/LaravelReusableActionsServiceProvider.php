<?php

namespace Aminetiyal\LaravelReusableActions;

use Aminetiyal\LaravelReusableActions\Commands\LaravelReusableActionsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelReusableActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-reusable-actions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-reusable-actions_table')
            ->hasCommand(LaravelReusableActionsCommand::class);
    }
}
