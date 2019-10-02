Interface - Class binding using Service Provider - Laravel



===================

Here I will show you class binding in service provider based on single value.let us take an example "cache data in db or file, that is some data is stored in file or db for faster execution" -this is the concept.


######Requirements

Laravel framework 6
PHP >= 7.2.0


######My files


- CacheData.php = laravelsix/app/Http/CacheData/CacheData.php

interface CacheData
{
    public function saveCache();

    public function getCache();
}
- DbSaveCache.php = laravelsix/app/Http/CacheData/DbSaveCache.php

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
- FileSaveCache.php = laravelsix/app/Http/CacheData/FileSaveCache.php

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
- cacheconfig.php =  laravelsix/config/cacheconfig.php

return [
    'type' => 'file'
];

######changed File

- AppServiceProvider.php = laravelsix/app/Providers/AppServiceProvider.php


 public function register()
    {
        $this->app->bind(
            CacheData::class,
            config('cacheconfig.type') == 'file' ? FileSaveCache::class : DbSaveCache::class
        );
    }
