<?php

namespace App\Providers;

use App\Deadline;
use App\Http\Resources\Api\OrderResource;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\LayoutComposer;
use App\Observers\OrderObserver;
use App\Observers\UserObserver;
use App\Order;
use App\User;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
    public function boot(Dispatcher $events)

    {
        OrderResource::withoutWrapping();
        // View::share(['deadlines'=> Deadline::all(), 'services' => Service::orderBy('name', 'ASC')->get(), 'web_setting' => WebSetting::first(),'blogs' => Blog::all()]);


    }
}
