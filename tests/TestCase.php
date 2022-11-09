<?php

namespace SertxuDeveloper\Sitemap\Tests;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Orchestra\Testbench\TestCase as Orchestra;
use SertxuDeveloper\Sitemap\SitemapServiceProvider;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class TestCase extends Orchestra
{
    /**
     * Define database migrations.
     *
     * @return void
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
