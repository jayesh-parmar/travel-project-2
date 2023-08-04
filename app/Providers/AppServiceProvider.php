<?php

namespace App\Providers;

use App\Models\HomePage;
use Illuminate\Support\ServiceProvider;
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
    public function boot()
    {
        View::composer('*',function($view){
            $id=2;
            $homedata = HomePage::find($id);
            
        
            $view->with('homedata',$homedata);
        });
    }
}
