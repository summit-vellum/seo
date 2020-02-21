<?php

namespace Quill\Seo;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Quill\Seo\Models\Policies\SeoPolicy;
use Quill\Seo\Models\Seo;

class SeoAuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the afpplication.
     *
     * @var array
     */
    protected $policies = [
        Seo::class => SeoPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}