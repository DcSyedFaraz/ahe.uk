<?php

namespace App\Providers;

use App\Deadline;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Service;
use App\WebSetting;
use App\Blog;

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
        View::share(['deadlines'=> Deadline::all(), 'services' => Service::orderBy('name', 'ASC')->get(), 'web_setting' => WebSetting::first(),'blogs' => Blog::all()]);


    }
}
