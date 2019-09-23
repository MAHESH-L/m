<?php

namespace App\Providers;

use App\Http\CacheData\CacheData;
use App\Http\CacheData\DbSaveCache;
use App\Http\CacheData\FileSaveCache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CacheData::class,
            config('cacheconfig.type') == 'file' ? FileSaveCache::class : DbSaveCache::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
