<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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

	protected function _registerBlueprintMacro() {
		Blueprint::macro( 'primaryColumn', function () {
			$this->bigIncrements( 'serial' )->comment( 'Primary column.' );
			// Add more primary columns
		} );
		Blueprint::macro( 'defaultFields', function () {
			$this->timestamps();
			$this->softDeletes();
		} );
	}
}
