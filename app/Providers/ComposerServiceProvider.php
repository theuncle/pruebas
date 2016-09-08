<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer(['front.blog.index'], 'App\http\ViewComposers\AsideComposer');
        view()->composer(
            ['front.blog.index', 'front.blog.article'], 'App\Http\ViewComposers\AsideComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
