<?php

namespace App\Providers;

use App\Pages;
use Illuminate\Support\ServiceProvider;
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
    public function boot()
    {
       

        View::composer("frontend.layout", function($view){
            $metaData = Pages::all();
            $transformedData = [];
    
            foreach ($metaData as $page) {
                $transformedData[$page['page_name']] = [
                    'id' => $page['id'],
                    'page_name' => $page['page_name'],
                    'title' => $page['title'],
                    'description' => $page['description'],
                    'meta_image' => $page['meta_image'],
                ];
            }

            $view->with('metaData', $transformedData);
        });
        //
        // Schema::defaultStringLength(191);
        // \URL::forceScheme('https');
        
        // if($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }
    }
}
