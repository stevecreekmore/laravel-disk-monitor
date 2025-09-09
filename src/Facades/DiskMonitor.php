<?php

namespace stevecreekmore\LaravelDiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \stevecreekmore\LaravelDiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \stevecreekmore\LaravelDiskMonitor\DiskMonitor::class;
    }
}
