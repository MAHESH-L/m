<?php

namespace App\Http\CacheData;

use App\Http\CacheData\CacheData;

class DbSaveCache implements CacheData
{
    Public function saveCache()
    {
        return "Saved SuccessFully.. to DB!";
    }

    public function getCache()
    {
        return "Data from Db Cache.";
    }
    
}