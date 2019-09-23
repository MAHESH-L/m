<?php

namespace App\Http\Controllers;

use App\Http\CacheData\CacheData;

use Illuminate\Http\Request;

class DataCacheController extends Controller
{
    protected $CacheData;

    public function __construct(CacheData $CacheData)
    {
        $this->CacheData = $CacheData;
    }

    public function get()
    {
        return $this->CacheData->saveCache(7, 'Good');  //app(CacheData::class)
    }
}
