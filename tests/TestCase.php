<?php

namespace SertxuDeveloper\Sitemap\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;
use SertxuDeveloper\Sitemap\SitemapServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Define database migrations.
     */
    protected function defineDatabaseMigrations(): void {
        $this->loadLaravelMigrations();
    }

    /**
     * Get package providers.
     *
     * @param  Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array {
        return [
            SitemapServiceProvider::class,
        ];
    }
}
