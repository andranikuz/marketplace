<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Region;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

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
        View::composer(['filters.index'], function ($view) {
            $request = request();
            if(!empty($request->region))
                $region = Region::with('cities')->find($request->region);
            else
                $region = null;

            $view->with('categories', Category::tree())
                ->with('regions', Region::select('id', 'name')->get())
                ->with('region', $region);
        });
    }
}
