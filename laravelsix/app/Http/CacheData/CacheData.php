<?php

namespace App\Http\CacheData;

interface CacheData
{
    public function saveCache();

    public function getCache();
}