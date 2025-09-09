<?php

namespace stevecreekmore\DiskMonitor\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Database\Eloquent\Factories\Factory;
use stevecreekmore\DiskMonitor\DiskMonitorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn(string $modelName) => 'stevecreekmore\\DiskMonitor\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DiskMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'sqlite');
        config()->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        include_once __DIR__ . '/../database/migrations/create_disk_monitor_tables.php.stub';
        // (new CreateDiskMonitorTables())->up();
        // config()->set('database.default', 'testing');

        // $app['config']->set('database.connections.sqlite', [
        //     'driver' => 'sqlite',
        //     'database' => ':memory:',
        //     'prefix' => '',
        // ]);
        // include_once __DIR__ . '/../database/migrations/create_disk_monitor_table.php.stub';
        // (new \CreateDiskMonitorTable())->up();

        // foreach (\Illuminate\Support\Facades\File::allFiles(__DIR__   . '/database/migrations') as $migration) {
        //     (include $migration->getRealPath())->up();
        // }
    }
}
