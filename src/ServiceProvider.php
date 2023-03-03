<?php namespace Aladei\ECommerce;

use Aladei\Tenancy\Tenancy;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Tenancy
        Tenancy::addMigrationPath(__DIR__.'/../database/migrations/tenants');
    }

}
