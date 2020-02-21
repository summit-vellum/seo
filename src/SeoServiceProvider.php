<?php

namespace Quill\Seo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Quill\Seo\Listeners\RegisterSeoModule;
use Vellum\Module\Quill;

class SeoServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '\routes/seo.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'seo');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/seo.php', 'seo');
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterSeoModule::class);
    }
}