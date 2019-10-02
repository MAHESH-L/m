<?php

namespace App\Http\CacheData;

use App\Http\CacheData\CacheData;

Class FileSaveCache implements CacheData
{
    Public function saveCache()
    {
        return "Saved SuccessFully..to File";
    }

    public function getCache()
    {
        return "Data from File Cache.";
    }
}
