<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Department;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	$department = new Department();

		$departments = $department
			->getDepartmentsE();

		//view()->share('departments', $departments);
		view()->composer('layouts.app', function ($view) use($departments) {

			$view->with('departments', $departments);
		});
    }
}
