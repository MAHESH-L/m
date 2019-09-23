<?php

namespace App\Http\CacheData;

use App\Http\CacheData\CacheData;

Class FileSaveCache implements CacheData
{
    Public function saveCache($id, $data)
    {
        return "Saved SuccessFully..to File   ".$data;
    }

    public function getCache($id)
    {
        return "Data from File Cache.";
    }
}
