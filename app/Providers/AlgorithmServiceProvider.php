<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AlgorithmServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/Algorithm/Euclidean.php';
        require_once app_path() . '/Helpers/Algorithm/NaiveBayes.php';
    }
}
