<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\SeriesRepository;
use App\Http\Repositories\EloquentSeriesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{

    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];

    // /**
    //  * Register services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    // }

}
