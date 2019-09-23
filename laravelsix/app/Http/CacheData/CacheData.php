<?php

namespace App\Http\CacheData;

interface CacheData
{
    public function saveCache($id, $data);

    public function getCache($id);
}