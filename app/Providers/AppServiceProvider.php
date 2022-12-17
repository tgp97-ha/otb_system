<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, app()->getLocale());
        Carbon::setLocale(app()->getLocale());
        Paginator::useBootstrap();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->_registerBlueprintMacro();
    }

    protected function _registerBlueprintMacro()
    {
        Blueprint::macro('primaryColumn', function () {
            $this->bigIncrements('serial')->comment('Primary column.');
            // Add more primary columns
        });
        Blueprint::macro('defaultFields', function () {
            $this->timestamps();
            $this->softDeletes();
        });
    }
}
