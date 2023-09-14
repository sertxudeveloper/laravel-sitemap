<?php

namespace SertxuDeveloper\Sitemap;

use Illuminate\Support\ServiceProvider;

class SitemapServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-sitemap');
    }

    public function register() {
        //
    }
}
