<?php

namespace stevecreekmore\DiskMonitor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use stevecreekmore\DiskMonitor\Commands\RecordDiskMetricsCommand;
use stevecreekmore\DiskMonitor\Commands\DiskMetricsController;
use Illuminate\Support\Facades\Route;


class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_table')
            ->hasCommand(RecordDiskMetrics::class);
    }
}
