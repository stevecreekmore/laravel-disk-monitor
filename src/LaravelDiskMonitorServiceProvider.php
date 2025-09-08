<?php

namespace stevecreekmore\LaravelDiskMonitor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use stevecreekmore\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;

class LaravelDiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_disk_monitor_table')
            ->hasCommand(LaravelDiskMonitorCommand::class);
    }
}
