<?php

namespace App\Http\CacheData;

use App\Http\CacheData\CacheData;

class DbSaveCache implements CacheData
{
    Public function saveCache($id, $data)
    {
        return "Saved SuccessFully.. to DB!";
    }

    public function getCache($id)
    {
        return "Data from Db Cache.";
    }
    
}