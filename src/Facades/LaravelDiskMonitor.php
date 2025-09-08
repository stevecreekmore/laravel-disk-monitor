<?php

namespace stevecreekmore\LaravelDiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \stevecreekmore\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \stevecreekmore\LaravelDiskMonitor\LaravelDiskMonitor::class;
    }
}
